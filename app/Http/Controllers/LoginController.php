<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class LoginController extends Controller
{
    public function index(){
        return view('/login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        Alert::error('Login gagal', 'email atau password salah!');
        return back();
   }

   public function logout(Request $request){

       Auth::logout();

       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return redirect('/login');
   }
}
