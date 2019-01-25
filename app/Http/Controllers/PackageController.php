<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageType;
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
        return view('site.packages.list');
    }

    public function videoPackages()
    {
        $type = getVideoType();
        return view('site.package_types.list', compact('type'));
    }

    public function photoPackages()
    {
        $type = getPhotoType();
        return view('site.package_types.list', compact('type'));
    }



    public function videoPackagesList(PackageType $packageType)
    {
        return view('site.packages.list', compact('packageType'));
    }



    public function photoPackagesList(PackageType $packageType)
    {
        return view('site.packages.list', compact('packageType'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PackageType $packageType)
    {
        return view('admin.packages.create',compact('packageType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PackageType $packageType)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        $params['type_id'] = $packageType->id;
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
    public function edit(PackageType $packageType, Package $package)
    {
        return view('admin.packages.edit', compact('package','packageType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageType $packageType, Package $package)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
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
    public function destroy(Package $package,  PackageType $packageType)
    {
        try {
            $package->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Package.');
        }   

        return redirect()->route('add-packages',['packageType'=>$packageType->id])->with('success_message','Package deleted successfully!!');
    }
}
