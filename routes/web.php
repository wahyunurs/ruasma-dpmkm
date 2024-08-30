<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Mahasiswa;

Route::controller(AdminController::class)->group(function () {
    Route::get('Admin/register', 'register')->name('register');
    Route::post('Admin/register', 'registerSave')->name('register.save');

    Route::get('Admin/login', 'login')->name('login');
    Route::post('Admin/login', 'loginAction')->name('login.action');

    Route::get('Admin/logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('Admin/dashboard', function () {
        return view('Admin.dashboard');
    })->name('adminDashboard');

    Route::controller(AdminController::class)->prefix('Admin/mahasiswa')->group(function () {
        Route::get('', 'mahasiswaIndex')->name('adminMahasiswa');
    });

    Route::controller(AdminController::class)->prefix('Admin/aspirasi')->group(function () {
        Route::get('', 'aspirasiIndex')->name('adminAspirasi');
    });

    Route::get('/Admin/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

Route::get('User/home', [UserController::class, 'home'])->name('home');
Route::get('User/aspirasi', [UserController::class, 'aspirasi'])->name('aspirasi');
Route::get('User/about', [UserController::class, 'about'])->name('about');

Route::post('/post/sendAspirasi', [UserController::class, 'sendAspirasi'])->name('post.sendAspirasi');
