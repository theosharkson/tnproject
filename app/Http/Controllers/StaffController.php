<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StaffController extends Controller
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
        return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // validate users
        $this->validate($request, [
            'firstname' => 'required',
            'user_type' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            // 'phonecode' => 'required',
            'phone_number' => 'required',
            'password' => 'required|string|min:6|confirmed',
            ]);

        $params = $request->all();
        
        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'user');
        }

        /* Create new user if user does not exit */
        //Set other relevant user info before saving user
        $params['tnid'] = "TN-".getUniqueCode('App\User', 'tnid', 5);
        // $params['user_type'] = getCustomerRoleId();
        $params['password'] = bcrypt($request->password);

        // dd($params);
        
        //  Create the user account 
        try {
            
            $user = User::create($params);
            
        } catch (Exception $e) {

            dd($e);
            /* Return Error Response */
            return redirect()->back()->with('error_message','Sorry, Unable to create staff account');
        }


        return redirect()->back()->with('success_message','Staff account created successfully!!');


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
        $staff = User::where('id',$id)->first();

        if (empty($staff)) {
            return redirect()->back()->with('error_message','Sorry, Staff Not Found!.');
        }

        return view('admin.staffs.edit',compact('staff'));
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
        $staff = User::where('id',$id)->first();

        if (empty($staff)) {
            return redirect()->back()->with('error_message','Sorry, Staff Not Found!.');
        }

        $this->validate($request, [
            'firstname' => 'required',
            'user_type' => 'required',
            'phone_number' => 'required',
            'email' => 'email|max:255',
            'password' => 'confirmed',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
            ]);

        $params = $request->all();
        
        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'user');
        }

        
        if (!empty($params['password'])) {
            $params['password'] = bcrypt($params['password']);
        }else{
            unset($params['password']);
        }

        // dd($params);
        
        //  Create the user account 
        try {
            
            $staff->update($params);
            
        } catch (Exception $e) {

            dd($e);
            /* Return Error Response */
            return redirect()->back()->with('error_message','Sorry, Unable to update staff account');
        }


        return redirect()->back()->with('success_message','Staff account modified successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = User::where('id',$id)->first();

        if (empty($staff)) {
            return redirect()->back()->with('error_message','Sorry, Staff Not Found!.');
        }

        try {
            $staff->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, You Cannot delete this Staff. There may some resources depending on this Canvas.');
        }

        return redirect()->back()->with('success_message','Staff Deleted Successful!!');
    }
}
