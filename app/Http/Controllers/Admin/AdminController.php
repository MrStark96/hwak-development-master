<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function showBuy()
    {
        return view('admin.buy');
    }
    public function showSell()
    {
        return view('admin.sell');
    }
    public function showRent()
    {
        return view('admin.rent');
    }
    public function showInvest()
    {
        return view('admin.invest');
    }
}
