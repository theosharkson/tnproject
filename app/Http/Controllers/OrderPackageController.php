<?php

namespace App\Http\Controllers;

use App\OrderPackage;
use Illuminate\Http\Request;

class OrderPackageController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderPackage  $orderPackage
     * @return \Illuminate\Http\Response
     */
    public function show(OrderPackage $orderPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderPackage  $orderPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderPackage $orderPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderPackage  $orderPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderPackage $orderPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderPackage  $orderPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderPackage $orderPackage)
    {
        //
    }


    public function delete(OrderPackage $orderPackage)
    {
        //remove all extras
        try {

            $orderPackage->orderPackageExtras()->delete();

        } catch (Exception $e) {
            
            return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

        }

        //remove order package
        try {

            $orderPackage->delete();

        } catch (Exception $e) {
            
            return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

        }

        return redirect()->back()->with('success_message','Package Removed From Cart Successfully.');
    }


}
