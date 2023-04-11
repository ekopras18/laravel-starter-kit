<?php

namespace App\Http\Controllers\Autocomplete;
use App\Models\Menu;

use Illuminate\Http\Request;

class ComboparentController extends Controllerautocomplete
{
    public function __construct(){
        $this->model=new Menu();
        $this->combodata=array(
                                'id' => 'menuId',
                                'kode' => 'menuId',
                                'nama' => 'menuNama',
                                'parent' => 'menuParent',
                                'route' => 'menuRoute',
                              );
    }
}
