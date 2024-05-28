<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\models\user;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function login()
    {
       return view('login');
    }
    public function authenticating(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        (Auth::attempt($credentials));
 
        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth()->user()->role_id === "admin") {
                // jika user admin
                return redirect()->intended('/home_admin')->with('success', ' Berhasil Login!');
            } else {
                // jika customer
                return redirect()->intended('')->with('success', ' Berhasil Login!');
            }
            
        }
 
        Session::flash('status', 'failed');
        Session::flash('message', 'password salah');

        return redirect('/login')->with('unsuccess', 'Email / Password Salah!');
    }

    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil Logout!');
    }


    public function register()
    {
       return view('register');
    }

    public function store_register(Request $request)
    {
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = 'customer';
        $user->photo = 'default.png';

        $user -> save();
        //$view=user::create($request->all()); 
        // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
          return redirect('/login')->with('success', 'Data Berhasil Tersimpan!');
          
    }
}
