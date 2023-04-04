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
            return redirect()->route('login');
        }

        // $this->search = request()->query('search', $this->search);
        // $this->comboRole = Role::select('role.id as cId', 'role.name as cLabel')->get()->toArray();
        $this->model = new Menu;
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
                'field' => 'menuNama',
                'type' => 'text',
                'placeholder' => 'Masukan Menu',
                'keterangan' => '* Wajib Diisi'
            ),
            array(
                'label' => 'ROUTE',
                'field' => 'menuRoute',
                'type' => 'text',
                'placeholder' => 'Masukan Route',
                'keterangan' => ''
            ),
            array(
                'label' => 'ICON',
                'field' => 'menuIcon',
                'type' => 'text',
                'placeholder' => 'Masukan Icon',
                'keterangan' => ''
            ),
            array(
                'label' => 'ORDER',
                'field' => 'menuOrder',
                'type' => 'number',
                'placeholder' => 'Masukan Order',
                'keterangan' => '* Wajib Diisi'
            ),
            array(
                'label' => 'PARENT',
                'field' => 'menuParent',
                'type' => 'autocomplete',
                'url' => 'comboparent',
                'text' => 2,
                'default' => 'Pilih Parent',
                'keterangan' => ''
            ),
        );

    }

    public function render()
    {
        $query_menu = $this->model->whereNull('navigasi')->get();
        
        $data = [
            'route' => $this->route,
            'primarykey_menu' => $this->primarykey_menu,
            'query_menu' => $query_menu,
            'grid_menu' => $this->grid_menu,
            'form_menu' => $this->form_menu,
            // 'statusedit' => true,
        ];
        return view('livewire.settings.setting', $data)->extends('layouts.app',[
            'page_tittle' => 'Settings System',
            'page' => 'Main',
            'page_active' => 'Settings',
            'menu' => $this->menuAuth()
            ])->section('content');
    }
}
