<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
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
        return view('admin.packages.create');
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
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
            'package_products' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'package');
        }

        try {
            $package = Package::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Package.');
        }

        try {
            $package->products()->attach($params['package_products']);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Aattach Products.');
        }



        return redirect()->back()->with('success_message','Package saved successfully!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
            'package_products' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'package');
        }

        try {
            $package->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Update Package.');
        }   

        return redirect()->back()->with('success_message','Package Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        try {
            $package->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Package.');
        }   

        return redirect()->route('packages.create')->with('success_message','Package deleted successfully!!');
    }
}
