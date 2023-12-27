<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if the submitted form has a 'login_as' field
        if ($request->has('login_as')) {
            $loginType = $request->input('login_as');

            if ($loginType === 'admin') {
                // Attempt admin login
                if (Auth::attempt($credentials, $request->has('remember'))) {
                    // Jika otentikasi berhasil
                    return redirect()->intended('/dashboardadmin');
                }
            } elseif ($loginType === 'user') {
                // Default behavior for regular users
                if (Auth::attempt($credentials, $request->has('remember'))) {
                    // Jika otentikasi berhasil
                    return redirect()->intended('/home');
                }
            } elseif ($loginType === 'suplier') {
                // Default behavior for regular users
                if (Auth::attempt($credentials, $request->has('remember'))) {
                    // Jika otentikasi berhasil
                    return redirect()->intended('/dasboardsuplier');
                }
            }
        }

        // Jika otentikasi gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
