<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    // FUNCTION REGISTER ADMIN
    public function register()
    {
        return view('Admin/Auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    // FUNCTION LOGIN ADMIN
    public function login()
    {
        return view('Admin/Auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('adminDashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    // ASPIRASI CONTROLL
    public function aspirasiIndex()
    {
        $aspirasi = Aspirasi::orderBy('created_at', 'DESC')->get();

        return view('Admin.aspirasi.index', compact('aspirasi'));
    }

    // MAHASISWA CONTROLL
    public function mahasiswaIndex()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at', 'DESC')->get();

        return view('Admin.mahasiswa.index', compact('mahasiswa'));
    }
}
