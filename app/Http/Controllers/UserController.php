<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function registerRefrence($tnid)
    {
        if(Auth::user()){
            return redirect()->route('site')->with('warning_message','You are alredy Logged In');
        }

        return view('auth.register', compact('tnid'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required|string|min:6|confirmed',
            ]);

        $params = $request->all();

        //Check if the user submitted a correct Refrence ID
        if(!empty($params['refrence_tnid'])){
            $ref_user = User::where('tnid', $params['refrence_tnid'])->first();

            if(empty($ref_user)){
                return redirect()->back()->with('warning_message','Sorry, Invalid Refrence Code Provided');
            }
        }
        
        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'user');
        }

        /* Create new user if user does not exit */
        //Set other relevant user info before saving user
        $params['tnid'] = getTNid();
        $params['user_type'] = getCustomerRoleId();
        $params['password'] = Hash::make($request->password);

        // dd($params);
        
        //  Create the user account 
        try {
            
            $user = User::create($params);

            //Log the user in 
            Auth::guard()->login($user);
            
        } catch (Exception $e) {

            dd($e);
            /* Return Error Response */
            return redirect()->back()->with('error_message','Sorry, Unable to create your account');
        }



        return redirect()->route('site')->with('success_message','Account created successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
