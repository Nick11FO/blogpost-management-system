<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // Function login
    public function authenticate(Request $request)
    {
        // Validasi data pas mau login
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Cek ke database ada tidak data yang dikirimkan
        // Klo ada return kemana dan sudah login 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Klo gagal login return back dengan loginError isinya kanannya tuh
        return back()->with('loginError', 'Login failed!');

    }

    // Function Logout
    public function logout(Request $request)
    {
        // Auth Logout
        Auth::logout();

        // session dimatikan yang dah login
        // token regenrate yang dah login
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return login
        return redirect('/login');
    }



}
