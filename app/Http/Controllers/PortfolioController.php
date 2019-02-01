<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
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

    public function selectType()
    {
        return view('site.portfolio.select_type');
    }

    public function photoAlbums()
    {
        $photo_albums = Portfolio::where('type', 'photo')->get();
        // dd($photo_albums->toArray());
        return view('site.portfolio.photo_albums', compact('photo_albums'));
    }

    public function photoAlbumsShow(Portfolio $portfolio)
    {
        return view('site.portfolio.photo_albums_show', compact('portfolio'));
    }


    public function videoAlbums()
    {
        $video_albums = Portfolio::where('type', 'video')->get(); 
        // dd($video_albums->toArray());
        return view('site.portfolio.video_albums', compact('video_albums'));
    }

    public function videoAlbumsShow(Portfolio $portfolio)
    {
        return view('site.portfolio.video_albums_show', compact('portfolio'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();
        // dd($params);

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'portfolio');
        }

        try {
            $portfolio = Portfolio::create($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Add Portfolio.');
        }


        return redirect()->back()->with('success_message','Portfolio saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $params = $request->all();

        //Add The Image
        if(!empty($request->file('image'))){
            $params['image'] = save_image( $request->file('image'), 'portfolio');
        }

        try {
            $portfolio->update($params);
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Update Portfolio.');
        }  



        return redirect()->back()->with('success_message','Portfolio Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        try {
            $portfolio->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Unable to Delete Portfolio.');
        }   

        return redirect()->route('portfolios.create')->with('success_message','Portfolio deleted successfully!!');
    }
}
