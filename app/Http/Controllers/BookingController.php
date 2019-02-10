<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function customize(Package $package)
    {
        // dd($package->toArray());
        return view('site.bookings.customize', compact('package'));
    }
}
