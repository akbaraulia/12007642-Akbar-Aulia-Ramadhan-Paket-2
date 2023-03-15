<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('Auth.Login');
    }
    

    public function authanticate(Request $request)
    {

        $login = $request -> validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt ($login)) {

           $request->session()->regenerate();
           return redirect()->intended('/index');
        }

            return back()->with('loginerror', 'anda tidak terdaftar');
    }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');

        }

}
