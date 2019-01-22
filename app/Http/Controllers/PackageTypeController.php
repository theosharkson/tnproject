<?php

namespace App\Http\Controllers;

use App\PackageType;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
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
        return view('admin.package_types.create');
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
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'package_type');
        }

        try {
            $package_type = PackageType::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Package Type.');
        }


        return redirect()->back()->with('success_message','Package Type saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageType  $packageType
     * @return \Illuminate\Http\Response
     */
    public function show(PackageType $packageType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackageType  $packageType
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageType $packageType)
    {
        return view('admin.package_types.edit', compact('packageType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageType  $packageType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageType $packageType)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'package_type');
        }

        try {
            $packageType->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Update Package Type.');
        }  



        return redirect()->back()->with('success_message','Package Type Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageType  $packageType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageType $packageType)
    {
        try {
            $packageType->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Package Type.');
        }   

        return redirect()->route('package-types.create')->with('success_message','Package Type deleted successfully!!');
    }
}
