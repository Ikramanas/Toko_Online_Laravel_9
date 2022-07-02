<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
   public function index()
   {
        return view('login.index');
   }

   public function authenticate(Request $request)
   {
    // dd($request);
       $credential = $request->validate([
         'email'=>['required','email'],
         'password'=>['required']
       ]);

       //  dd($user);
       
       if (Auth::attempt($credential)) {
         $request->session()->regenerate();
        
        // dd(Auth()->user()->roles);

         if (Auth()->user()->roles == '1') {     // menetukan roles apakah pengguna adalah admin?
          return redirect()->route('admin_dashboard'); //jika benar, arahkan ke admin_dashboar
        }
         if (Auth()->user()->roles == '2') {     // menetukan roles apakah pengguna adalah admin?
          return redirect()->route('seller.index'); //jika benar, arahkan ke admin_dashboar
        }

        else {
          return redirect()->route('dashboard');    //jika bukan maka arahkan pada dashboard biasa
        }

       }
        return back()->with('LoginError','Login gagal');
   }

   public function logout()
{
    session()->flush();
    Auth::logout();
 
    Request()->session()->invalidate();
 
    Request()->session()->regenerateToken();
 
    return redirect('/login');
}
}
