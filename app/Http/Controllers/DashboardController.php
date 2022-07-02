<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $nama =  auth()->user()->nama;

        if ( auth()->user()->roles == '2') {
            return view('seller.index');
        }
        // if ( auth()->user()->level == '2') {

        //     return view('dashboard.index');
        // }
        else {
            return view('dashboard.index',['title'=>'dashboard pengunjung']);
        }
    }
}
