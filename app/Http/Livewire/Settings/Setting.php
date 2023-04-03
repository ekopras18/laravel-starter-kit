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
        $this->primarykey = 'id';
        $this->mandatory = [
            'username' => 'required',
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required|min:4',
        ];
        $this->grid = array(
            array(
                'label' => 'NAME',
                'field' => 'username',
                'type' => 'text',
                'width' => ''
            ),
            array(
                'label' => 'NAME',
                'field' => 'name',
                'type' => 'text',
                'width' => ''
            ),
            array(
                'label' => 'EMAIL',
                'field' => 'email',
                'type' => 'text',
                'width' => ''
            ),
            array(
                'label' => 'ROLE',
                'field' => 'rolename',
                'type' => 'text',
                'width' => ''
            ),
        );
        $this->form = array(
            array(
                'label' => 'USERNAME',
                'field' => 'username',
                'type' => 'text',
                // 'col' => 6,
                'placeholder' => 'Enter Username',
                'required' => true
            ),
            array(
                'label' => 'NAME',
                'field' => 'name',
                'type' => 'text',
                'placeholder' => 'Enter Name',
                'required' => true
            ),
            array(
                'label' => 'EMAIL',
                'field' => 'email',
                'type' => 'email',
                'placeholder' => 'Enter Email',
                'required' => true
            ),
            array(
                'label' => 'ROLE',
                'field' => 'rolename',
                'type' => 'hidden',
            ),
            // array(
            //     'label' => 'ROLE',
            //     'field' => 'role',
            //     'type' => 'combo',
            //     'data' => $this->comboRole,
            //     'default' => 'Choose Role',
            //     'required' => true
            // ),
            array(
                'label' => 'PASSWORD',
                'field' => 'password',
                'type' => 'password',
                'placeholder' => 'Enter Password',
                'required' => true
            ),
        );

    }

    public function render()
    {
        $query = $this->model->get();

        $data = [
            'route' => 'users',
            'tittle' => 'Users',
            'page_tittle' => 'Users',
            'page_active' => 'List Users',
            'primarykey' => $this->primarykey,
            'query' => $query,
            'grid' => $this->grid,
            'form' => $this->form,
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
