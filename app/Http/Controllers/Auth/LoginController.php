<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('index'); // Buat view index.blade.php untuk form login
    }

    public function login(Request $request)
    {
        // Proses login Anda
        if (auth()->attempt($request->only('email', 'password'))) {
            $request->session()->flash('status', 'Selamat Datang Admin!');
            return redirect('/'); // Ganti dengan halaman tujuan setelah login
        }
    
        return back()->withErrors(['login' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->flash('status', 'Anda Telah Logout!');
        return redirect('/');
    }

 
}
