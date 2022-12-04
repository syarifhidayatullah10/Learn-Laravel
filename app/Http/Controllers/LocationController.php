<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index()
    {
        // GET IP ADDRESS IN SERVER
        $userIp = $_SERVER['REMOTE_ADDR'];

        $position = Location::get('114.4.4.138');

        return view('location',['location'  => $position]);
    }
}
