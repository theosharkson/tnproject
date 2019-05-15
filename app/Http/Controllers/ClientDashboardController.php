<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientDashboardController extends Controller
{
    
    public function index(){

        return view('site.dashboard.index');
    }


    public function pending(){

        return view('site.dashboard.pending_payment');
    }


    
}