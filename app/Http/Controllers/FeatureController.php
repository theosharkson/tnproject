<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
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
        return view('admin.features.create');
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
            'slug' => 'required',
        ]);

        $params = $request->all();

        try {
            Feature::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Feature.');
        }   

        return redirect()->back()->with('success_message','Feature saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $params = $request->all();

        try {
            $feature->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to modify Feature');
        }


        return redirect()->back()->with('success_message','Feature modified successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        try {
            $productType->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, You Cannot delete this Feature. There may some resources depending on this Canvas.');
        }

        return redirect()->back()->with('success_message','Feature Deleted Successful!!');
    }
}
