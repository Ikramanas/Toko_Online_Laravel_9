<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
        
    }
}
