<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Stevebauman\Location\Location;
use Stevebauman\Location\Position;
use Stevebauman\Location\Drivers\Driver;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        Session::flush();

        if (\Location::get($request->ip())) {
            $cityName = \Location::get($request->ip())->cityName;
            $abbreviation = \Location::get($request->ip())->areaCode;
        } else {
            $cityName = \Location::get()->cityName;
            $abbreviation = \Location::get()->areaCode;
        }

        return view('home', compact('cityName'), compact('abbreviation'));
    }
}
