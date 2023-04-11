<?php

namespace App\Http\Livewire\Settings;

use App\Http\Livewire\Core;
use App\Models\Setup\Role;
use App\Models\Settings\Menu;
use Session;


class Setting extends Core
{
    public function mount()
    {
        if (trim(Session::get('email')) == '' or $this->routeAuth() == false) {
            session()->flash('messages', 'Sorry, Wrong Authentication.');
            return redirect()->route('login');
        }

        $this->model_menu = new Menu;
        $this->route = 'settings';
        $this->primarykey_menu = 'id';
        $this->mandatory_menu = [
            'clientid' => 'required',
            'name' => 'required',
            'route' => 'required',
        ];
        $this->grid_menu = array(
            array(
                'label' => 'ICON',
                'field' => 'icon',
                'type' => 'icon',
                'width' => '2%'
            ),
            array(
                'label' => 'MENU',
                'field' => 'name',
                'type' => 'text',
                'width' => ''
            ),
            array(
                'label' => 'ROUTE',
                'field' => 'route',
                'type' => 'text',
                'width' => '10%'
            ),
            array(
                'label' => 'ORDER',
                'field' => 'order',
                'type' => 'text',
                'width' => '2%'
            ),
        );
        $this->form_menu = array(
            array(
                'label' => 'MENU',
                'field' => 'name',
                'type' => 'text',
                'placeholder' => 'Masukan Menu',
                'keterangan' => '',
                'required' => true
            ),
            array(
                'label' => 'ROUTE',
                'field' => 'route',
                'type' => 'text',
                'placeholder' => 'Masukan Route',
                'keterangan' => ''
            ),
            array(
                'label' => 'ICON',
                'field' => 'icon',
                'type' => 'text',
                'placeholder' => 'Masukan Icon',
                'keterangan' => ''
            ),
            array(
                'label' => 'ORDER',
                'field' => 'order',
                'type' => 'number',
                'placeholder' => 'Masukan Order',
                'keterangan' => '',
                'required' => true
            ),
            array(
                'label' => 'PARENT',
                'field' => 'parent',
                'type' => 'autocomplete',
                'url' => 'comboparent',
                'text' => 2,
                'default' => 'Pilih Parent',
                'keterangan' => '',
                'required' => true
            ),
        );

    }

    public function render()
    {
        $query_menu = $this->model_menu->whereNull('navigasi')->latest()->get();
        
        $data = [
            'route' => $this->route,
            'primarykey_menu' => $this->primarykey_menu,
            'query_menu' => $query_menu,
            'grid_menu' => $this->grid_menu,
            'form_menu' => $this->form_menu,
        ];
        return view('livewire.settings.setting', $data)->extends('layouts.app',[
            'page_tittle' => 'Settings System',
            'page' => 'Main',
            'page_active' => 'Settings',
            'menu' => $this->menuAuth()
            ])->section('content');
    }

    
}
