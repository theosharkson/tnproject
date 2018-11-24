<?php

namespace App\Http\Controllers;

use Exception;
use App\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
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
        return view('admin.user_types.create');
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
        'name' => 'required',
        ]);

        $params = $request->all();
        // dd($params);

        try {
           $userType = UserType::create($params);

           $selected_permissions = [];

           foreach ($params['permissions'] as $feature_id => $permissions) {

               $current_permission = [
                   "name" => "",
                   "feature_id" => $feature_id,
                   "form_type" => 2,
               ];

               if (in_array('can_add', $permissions)) {
                   $current_permission['can_add'] = 1;
               }
               if (in_array('can_edit', $permissions)) {
                   $current_permission['can_edit'] = 1;
               }
               if (in_array('can_delete', $permissions)) {
                   $current_permission['can_delete'] = 1;
               }
               if (in_array('can_view_log', $permissions)) {
                   $current_permission['can_view_log'] = 1;
               }
               if (in_array('can_print', $permissions)) {
                   $current_permission['can_print'] = 1;
               }

               $selected_permissions[] = $current_permission;
               
           }



           $userType->permissions()->createMany($selected_permissions);


        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add User Type.');
        }   

        return redirect()->back()->with('success_message','User Type saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit(UserType $userType)
    {
        return view('admin.user_types.edit',compact('userType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserType $userType)
    {
        $this->validate($request, [
        'name' => 'required',
        ]);

        $params = $request->all();
        // dd($params);

        try {
           $userType->update($params);

           $selected_permissions = [];

           foreach ($params['permissions'] as $feature_id => $permissions) {

               $current_permission = [
                   "name" => "",
                   "feature_id" => $feature_id,
                   "form_type" => 2,
               ];

               if (in_array('can_add', $permissions)) {
                   $current_permission['can_add'] = 1;
               }
               if (in_array('can_edit', $permissions)) {
                   $current_permission['can_edit'] = 1;
               }
               if (in_array('can_delete', $permissions)) {
                   $current_permission['can_delete'] = 1;
               }
               if (in_array('can_view_log', $permissions)) {
                   $current_permission['can_view_log'] = 1;
               }
               if (in_array('can_print', $permissions)) {
                   $current_permission['can_print'] = 1;
               }

               $selected_permissions[] = $current_permission;
               
           }


           $userType->permissions()->delete();
           $userType->permissions()->createMany($selected_permissions);


        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to update User Type.');
        }   

        return redirect()->back()->with('success_message','User Type updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $userType)
    {
        try {
            $userType->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, You Cannot delete this User type. There may some resources depending on this Canvas.');
        }

        return redirect()->back()->with('success_message','User Type Deleted Successful!!');
    }
}
