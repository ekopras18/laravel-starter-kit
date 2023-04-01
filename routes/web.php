<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/getsession', function () {
    return Session::All();
});

Route::get('/', App\Http\Livewire\Main::class);
Route::get('/home', App\Http\Livewire\Main::class)->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Http\Livewire\Auth\Authentication::class)->name('login');
});
// Route::get('/verify', [App\Http\Livewire\Auth\Authentication::class, 'verifForm'])->name('verif');
Route::get('/logout', [App\Http\Livewire\Auth\Authentication::class, 'logout'])->name('logout');
