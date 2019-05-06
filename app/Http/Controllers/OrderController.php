<?php

namespace App\Http\Controllers;

use Exception;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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

    public function viewCart()
    {
        return view('site.bookings.cart');
    }

    public function editOrderPackage($order_package)
    {
        //Check if the current order item being edited belongs to the current user.
        $orderPackage = Auth::user()->tempOrder->packages->where('id', $order_package)->first();
        
        if(empty($orderPackage)){
            return redirect()->route('view-cart')->with('error_message','Sorry, Something went wrong!!');
        }

        return view('site.bookings.edit_cart_package', compact('orderPackage'));
    }



    public function updateOrderPackage(Request $request, $order_package)
    {
        //Check if the current order item being edited belongs to the current user.
        $orderPackage = Auth::user()->tempOrder->packages->where('id', $order_package)->first();
        
        // dd($orderPackage);
        if(empty($orderPackage)){
            return redirect()->route('view-cart')->with('error_message','Sorry, Something went wrong!!');
        }

        $params = $request->all();

        // dd($params);

        //Try To Remove the existing extras added to cart
        try {

            $orderPackage->orderPackageExtras()->delete();

        } catch (Exception $e) {
            return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

        }


        if(array_key_exists('extras', $params)){
            //Try To create the Extras Temp Order Details (Cart Item)
            try {

                $order_extra = $orderPackage->orderPackageExtras()->createMany($params['extras']);

            } catch (Exception $e) {
                dd($e);
                return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

            }
            
        }


        return redirect()->route('view-cart')->with('success_message','Cart Package Updated Successful!!');

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
        $this->validate($request, [
            'package_id' => 'required',
        ]);

        $params = $request->all();

        $params['user_id'] = Auth::id();
        $params['process_status'] = getTempId();
        $params['date'] = Carbon::now();
        // $params['order_locations_id'] = getDefaultLocationId();

        // dd($params);
        
        // Check if there is an existing order
        $order = Order::where('process_status',getTempId())
                            ->where('user_id',Auth::id())
                            ->where('active_status',1)
                            ->first();

        //Create a new temp order if query above is empty else use the id from the result above
        if(empty($order)){
            
            //Try to create the order
            try {

                $order = Order::create($params);

            } catch (Exception $e) {
                return redirect()->back()->with('error_message','Sorry, Something went wrong!!');
            }

        }


        //Try To create the Package Temp Order Details (Cart Item)
        try {

            $order_package = $order->packages()->create($params);

        } catch (Exception $e) {
            dd($e);

            return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

        }

        if(array_key_exists('extras', $params)){
            //Try To create the Extras Temp Order Details (Cart Item)
            try {

                $order_extra = $order_package->orderPackageExtras()->createMany($params['extras']);

            } catch (Exception $e) {
                dd($e);
                return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

            }
        }

        
        // if(array_key_exists('extras', $params)){
        //     foreach($params['extras'] as $extra){
        //         //Try To create the Extras Temp Order Details (Cart Item)
        //         try {

        //             $order_extra = $order->extras()->createMany($extra);

        //         } catch (Exception $e) {
        //             dd($e);
        //             return redirect()->back()->with('error_message','Sorry, Something went wrong!!');

        //         }
        //     }
        // }

       


        return redirect()->back()->with('success_message','Package Added to Cart Successful!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
