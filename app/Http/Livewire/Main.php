<?php

namespace App\Http\Livewire;

use Session;

class Main extends Core
{
    public function mount()
    {
        // dd($this->menuAuth());

        if (trim(Session::get('email')) == '' or $this->routeAuth() == false) {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $data = [
            // 'page_tittle' => $this->checkRouteAuth(),
        ];

        return view('livewire.main', $data)->extends('layouts.app',[
            'page_tittle' => 'Main System',
            'page' => 'Main',
            'page_active' => 'Home',
            'menu' => $this->menuAuth()
            ])->section('content');
    }
}
