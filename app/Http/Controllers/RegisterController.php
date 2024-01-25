<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diisi sudah sesuai belom
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        // Enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Buat user dan masukkan ke dalam database
        User::create($validatedData);

        // return ke login dengan variable sucess yang tulisannya sebelah kanannya
        // $request->session()->flash('success', 'Registration successfull! Please login');
        // ini dua sama aja, cuma beda mau 1 baris atau 2 baris
        return redirect('/login')->with('success', 'Registration successfull! Please login');

    }
}
