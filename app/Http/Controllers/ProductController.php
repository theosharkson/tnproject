<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('admin.products.create');
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
            'price_per_extra' => 'required',
            'price_per_extra_d' => 'required',
            'price_per_extra_coin' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'product');
        }

        try {
            Product::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Product.');
        }   

        return redirect()->back()->with('success_message','Product saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required',
            'price_per_extra' => 'required',
            'price_per_extra_d' => 'required',
            'price_per_extra_coin' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'product');
        }

        try {
            $product->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Update Product.');
        }   

        return redirect()->back()->with('success_message','Product Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Product.');
        }   

        return redirect()->route('products.create')->with('success_message','Product deleted successfully!!');
    }
}
