<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientDashboardController extends Controller
{
    
    public function index(){

    	if(empty(Auth::user()->dashboard_activated)){
    		return redirect()->route('client-dashboard.pending-payment');
    	}

        return view('site.dashboard.index');
    }


    public function pending(){

        return view('site.dashboard.pending_payment');
    }


    
}
