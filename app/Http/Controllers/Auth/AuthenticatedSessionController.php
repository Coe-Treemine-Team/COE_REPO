<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        (Auth::attempt($credentials));
 
        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth()->user()->role === "admin") {
                // jika user admin
                return redirect()->intended('/home_admin')->with('success', ' Berhasil Login!');
            } else {
                // jika customer
                return redirect()->intended('')->with('success', ' Berhasil Login!');
            }
            
        }
 

        return redirect('/login')->with('unsuccess', 'Email / Password Salah!');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
