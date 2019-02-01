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








    public function storeImages(Request $request, Portfolio $portfolio)
    {

        $photos = $request->file('file');

        $params = $request->all();

        if (!is_array($photos)) {
            $photos = [$photos];
        }


        foreach ($photos as $key => $photo) {
            $payload = [];

             $payload['protfolio_id'] = $portfolio->id;
             $payload['type'] = 'photo';
             $payload['original_image'] = str_replace(' ', '_', $photo->getClientOriginalName()); 


           //Add The Image
           if(!empty($photo)){
               $payload['resource'] = save_image( $photo, 'portfolio_item');
           }

            $portfolio_item = PortfolioItem::create($payload);

           if(empty($portfolio_item->toArray())){
            return response()->json(['message' => 'Sorry image not saved'], 400);
           }

        }


        return response()->json(['message' => 'Image saved Successfully',
                                'newfilename' => $payload['original_image'],
                                'newfileid' => $portfolio_item->id
                                ], 200);
    }







    public function deleteImages(Request $request)
    {
        $item_id = $request->id;
        $uploaded_image = PortfolioItem::where('id', $item_id)->first();

        if (empty($uploaded_image)) {
            return response()->json(['message' => 'Sorry file does not exist'], 400);
        }


        $destination_path = base_path() . '/public/uploads/portfolio_item_images_raw/'.$uploaded_image->resource;
        $destination_actua_path = base_path() . '/public/uploads/portfolio_item_images/'.$uploaded_image->resource;
        $destination_actua_path_large = base_path() . '/public/uploads/portfolio_item_images_large/'.$uploaded_image->resource;
        $thumbnail_path = base_path() . '/public/uploads/portfolio_item_images_thumb/'.$uploaded_image->resource;


        if (file_exists($destination_path)) {
            unlink($destination_path);
        }
        if (file_exists($destination_actua_path)) {
            unlink($destination_actua_path); 
        }
        if (file_exists($destination_actua_path_large)) {
            unlink($destination_actua_path_large);
        }

        if (file_exists($thumbnail_path)) {
            unlink($thumbnail_path);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }


        return response()->json(['message' => 'File successfully delete'], 200);


    }




public function storeVideos(Request $request, Portfolio $portfolio)
    {
        // dd('theo');

        $files = $request->file('file');

        $params = $request->all();

        if (!is_array($files)) {
            $files = [$files];
        }


        foreach ($files as $key =>$file) {
            $payload = [];

             $payload['protfolio_id'] = $portfolio->id;
             $payload['type'] = 'video';
             $payload['newfilename'] = str_replace(' ', '_',$file->getClientOriginalName()); 


           //Add The File
           if(!empty($file)){
               $payload['resource'] = save_file($file, 'portfolio_item_videos');
           }

            $portfolio_item = PortfolioItem::create($payload);

           if(empty($portfolio_item->toArray())){
            return response()->json(['message' => 'Sorry file not saved'], 400);
           }

        }


        return response()->json(['message' => 'File saved Successfully',
                                'newfilename' => $payload['newfilename'],
                                'newfileid' => $portfolio_item->id
                                ], 200);
    }







    public function deleteVideos(Request $request)
    {
        dd('theo');
        $item_id = $request->id;
        $uploaded_image = PortfolioItem::where('id', $item_id)->first();

        if (empty($uploaded_image)) {
            return response()->json(['message' => 'Sorry file does not exist'], 400);
        }


        $destination_path = base_path() . '/public/uploads/portfolio_item_images_raw/'.$uploaded_image->resource;
        $destination_actua_path = base_path() . '/public/uploads/portfolio_item_images/'.$uploaded_image->resource;
        $destination_actua_path_large = base_path() . '/public/uploads/portfolio_item_images_large/'.$uploaded_image->resource;
        $thumbnail_path = base_path() . '/public/uploads/portfolio_item_images_thumb/'.$uploaded_image->resource;


        if (file_exists($destination_path)) {
            unlink($destination_path);
        }
        if (file_exists($destination_actua_path)) {
            unlink($destination_actua_path); 
        }
        if (file_exists($destination_actua_path_large)) {
            unlink($destination_actua_path_large);
        }

        if (file_exists($thumbnail_path)) {
            unlink($thumbnail_path);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }


        return response()->json(['message' => 'File successfully delete'], 200);


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
