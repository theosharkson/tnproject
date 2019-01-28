<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
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
    public function create(Portfolio $portfolio)
    {
        return view('admin.portfolio_items.create',compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Portfolio $portfolio)
    {
        $this->validate($request, [
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        $params['protfolio_id'] = $portfolio->id;
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['resource'] = save_image( $request->file('image'), 'portfolio_item');
        }

        try {
            $portfolio_item = PortfolioItem::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Portfolio Item.');
        }



        return redirect()->back()->with('success_message','Portfolio Item saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioItem $portfolioItem, Portfolio $portfolio)
    {
        try {
            $portfolioItem->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Item.');
        }   

        return redirect()->route('add-portfolio-items',['portfolio'=>$portfolio->id])->with('success_message','Item deleted successfully!!');
    }
}
