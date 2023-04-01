<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;


class Authentication extends Component
{
    public $name, $username, $email, $password, $password_confirmation, $accept, $remember;
    public $status = 'login';

    public function render()
    {
        return view('livewire.auth.authentication')->extends('layouts.authentication')->section('content');
    }

    public function loginForm()
    {
        $this->status = 'login';
    }

    public function registerForm()
    {
        $this->status = 'register';
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $throttleKey = strtolower($this->email) . '|' . request()->ip();

        if(RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $this->addError('email', __('auth.throttle', ['seconds' => RateLimiter::availableIn($throttleKey)]));
            return null;
        }
        if (!Auth::attempt($this->only(['email','password']),$this->remember)) {
            RateLimiter::hit($throttleKey);
            $this->addError('email', __('auth.failed'));
            return null;
        }
        
        Session::put('username', Auth::user()->username);
        Session::put('email', Auth::user()->email);
        Session::put('role', Auth::user()->role);
        Session::put('clientid', Auth::user()->clientid);

        return redirect(RouteServiceProvider::HOME);

    }

    public function register()
    {
        $validate = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:4',
            'accept' => 'required',
        ]);

        $user = User::create([
            'clientid' => 1,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user, true);
        //Verifikasi email
        // event(new Registered($user));

        Session::put('username', Auth::user()->username);
        Session::put('email', Auth::user()->email);
        Session::put('role', Auth::user()->role);
        Session::put('clientid', Auth::user()->clientid);

        return redirect(RouteServiceProvider::HOME);
    }

    public function logout()
    {
        Auth::guard()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
