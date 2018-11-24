<?php

namespace App\Http\Controllers;


use App\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{

	/**
	 *
	 * Register New Users
	 *
	 */
	
    public function register(Request $request)
    {
    	// validate users
    	$this->validate($request, [
            'refrence_tnid' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'phonecode' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
            'registering_as' => 'required',
            ]);
    	
    	/* check if user exist */
    	$user = User::where('email', $request->email)->first();

    	if ($user) {
    		//Return user alredy exist response
    		return response([
    			'status' => 'error',
    			'message' => 'User alredy exsist'
    		]);
    	}


    	/* Create new user if user does not exit */
    	$params = $request->all();
    	//Set other relevant user info before saving user
    	$params['tnid'] = getUniqueCode('App\User', 'tnid', 5);
    	$params['user_type'] = getCustomerRoleId();
    	$params['password'] = bcrypt($request->password);

    	if ($params['registering_as'] == 'customer') {
    		$params['user_type'] = getCustomerRoleId();
    	}

    	if ($params['registering_as'] == 'photographer') {
    		$params['user_type'] = getPhotographerRoleId();
    	}

    	// dd($params);
    	/* Create the user account */
    	

    	try {
    		
    		$user = User::create($params);
    		
    	} catch (Exception $e) {

    		dd($e);
    		/* Return Error Response */
    		return response([
    			'status' => 'error',
    			'message' => 'User registration failed. Please try again later'
    		]);
    	}

    	// dd($user->toArray());

    	// $http = new Client;

    	// $response = $http->get(url('/'), [
    	//     'form_params' => [
    	//         'grant_type' => 'password',
    	//         'client_id' => '3',
    	//         'client_secret' => 'vcLlflT9oaFyS6XmyEjQPpVTf2IVQlaO3Fkp2hiD',
    	//         'username' => $request->email,
    	//         'password' => $request->password,
    	//         'scope' => '',
    	//     ],
    	// ]);


    	$http = new \GuzzleHttp\Client();

    	$response = $http->post('http://localhost:9000/oauth/token', [
    	    'form_params' => [
    	        'grant_type' => 'password',
    	        'client_id' => '3',
    	        'client_secret' => 'vcLlflT9oaFyS6XmyEjQPpVTf2IVQlaO3Fkp2hiD',
    	        'username' => $request->email,
    	        'password' => $request->password,
    	        'scope' => '',
    	    ],
    	]);

    	// $payload = [
    	//     'form_params' => [
    	//         'grant_type' => 'password',
    	//         'client_id' => '3',
    	//         'client_secret' => 'vcLlflT9oaFyS6XmyEjQPpVTf2IVQlaO3Fkp2hiD',
    	//         'username' => $request->email,
    	//         'password' => $request->password,
    	//         'scope' => '',
    	//     ],
    	// ];



    	// $this->post('http://0.0.0.0:9000/oauth/token',$payload);


    	// dd('theo');

    	/* Return data */
    	return response([
    		'status' => 'ok',
    		'auth' => json_decode((string) $response->getBody(), true),
    		'user' => $user,
    	]);


    }



    /**
	 *
	 * Register New Users
	 *
	 */
	
    public function login(Request $request)
    {
    	
    }


    public function post($url, $post_array)
    {
        $contenttype = "application/json";
        $endpoint = $url;
        $headers = array();
        $headers[] = "Accept: $contenttype";
        // $headers[] = "Apikey: ".Apikey();
        $jsonbody = json_encode($post_array);
        // dd($jsonbody);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$endpoint);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);  
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonbody);      
        $return=curl_exec($ch); 
        $err= curl_error($ch);          
        curl_close($ch);

        if(!empty($return))
        {   //Request went though successfully

            $response = json_decode($return);

            dd($response);

            if($response->Status == 'OK')
            {   
                //Had an OK response
                return true;

            }else{
                // dd($response);
                //Had a FAILED response
                return false;
            }
            
        }else{
            // dd($response);
            //Request Failed
            return false;
        }
    }
}
