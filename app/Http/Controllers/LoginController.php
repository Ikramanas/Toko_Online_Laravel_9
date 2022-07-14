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
       if (Auth::attempt($request->only('email','password'))) {
         $request->session()->regenerate();

          if (Auth()->user()->roles == '1') {
            return redirect()->route('admin.dashboard');
          }
          elseif (Auth()->user()->roles == '2') {
            return redirect()->route('seller.dashboard');
          }
          elseif (Auth()->user()->roles == '3') {
            return redirect()->route('user.dashboard');
          }
      }

      return back()->with('error','Login gagal, Email atau Password salah');
   }

   public function logout()
{
  session()->flush();
    Auth()->logout();
    Request()->session()->invalidate();
    Request()->session()->regenerateToken();
    return redirect()->route('login');
}
}
