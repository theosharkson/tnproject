<?php

namespace App\Http\Controllers;

use App\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
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
        return view('admin.extras.create');
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
            'type' => 'required',
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'extra');
        }

        try {
            $extra = Extra::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Extra.');
        }


        return redirect()->back()->with('success_message','Extra saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        return view('admin.extras.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extra $extra)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'price_d' => 'required',
            'price_coin' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'extra');
        }

        try {
            $extra->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Update Package.');
        }  



        return redirect()->back()->with('success_message','Package Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extra $extra)
    {
        try {
            $extra->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Extra.');
        }   

        return redirect()->route('extras.create')->with('success_message','Extra deleted successfully!!');
    }
}
