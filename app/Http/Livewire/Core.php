<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Session;
use Livewire\WithPagination;
use App\Models\Settings\Menu;


class Core extends Component
{
    //Paginate & Search
    use WithPagination;
    public $search = '';
    public $order = 'asc';
    protected $paginationTheme = 'bootstrap';
    protected $updateQueryString = ['search'];

    // public function updatetingSearch()
    // {
    //     $this->resetPage();
    // }

    // public function searchorder($order)
    // {
    //     $this->order = $order;
    // }
    // // End Paginate & Search

    // //Delete Data
    // public $delete_id;
    // protected $listeners = ['deleteConfirm' => 'delete'];

    // public function deleteConfirm($id)
    // {
    //     $this->delete_id = $id;
    //     $this->dispatchBrowserEvent('delete-confirmation');
    // }

    // public function delete()
    // {
    //     $data = $this->model::find($this->delete_id);
    //     $data->delete();
    //     // $this->dispatchBrowserEvent('delete-success');
    // }
    // // End Delete Data
    
    // //Edit Data
    // public function editForm($id)
    // {
    //     $this->statusedit = false;

    //     $query = $this->model::find($id);
    //     $this->updateId = $id;
    //     // $a = [];
    //     for ($i = 0; $i < count($this->form); $i++) {
    //         $field = $this->form[$i]['field'];
    //         if ($field != 'password') {
    //             // if ($field == 'combo') {
    //             //     $name = $this->form[$i]['field'].'name';
    //             // //     // dd($this->$name);
    //             //     $this->$field = $query[$this->form[$i]['field']];
    //             //     $this->$name = $query[$this->form[$i]['field'].'name'];
    //             //   } else {
    //                 $this->$field = $query[$this->form[$i]['field']];
    //             //   }
    //             // array_push($a, $this->$field);
    //         }
    //     }

    //     // dd($a);
    // }

    // public function saveForm()
    // {
    //     $this->statusedit = true;

    //     $this->resetInput();
    // }

    // // End Edit Data


    // // Reset Form
    // public function resetInput()
    // {
    //     for ($i = 0; $i < count($this->form); $i++) {
    //         $field = $this->form[$i]['field'];
    //         $this->$field = null;
    //     }
    // }
    // // End Reset Form

    public function menuAuth()
    {

        $clientid = Session::get('clientid');
        $role = Session::get('role');
        $menu = new Menu();

        $level1 = $menu
            ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
            ->where('menu.clientid', '=', $clientid)
            ->where('menu.parent', '=', 0)
            ->where('rolemenu.role_id', '=', $role)
            ->orderby('menu.order', 'asc')
            ->get();
        $result = array();
        $index = 0;
        foreach ($level1 as $key => $val) {
            $res1 = array(
                'name' => $val->name,
                'route' => $val->route,
                'icon' => $val->icon,
                'level' => 1,
                'navigasi' => true,
                'child' => '',
            );
            $result[] = $res1;

            $level2 = $menu
                ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                ->where('menu.clientid', '=', $clientid)
                ->where('menu.parent', '=', $val->id)
                ->where('rolemenu.role_id', '=', $role)
                ->orderby('menu.order', 'asc')
                ->get();
            $res2 = array();
            $index2 = 0;
            foreach ($level2 as $key2 => $val2) {
                $res2[] = array(
                    'name' => $val2->name,
                    'route' => $val2->route,
                    'icon' => $val2->icon,
                    'level' => 2,
                    'navigasi' => false,
                    'child' => '',
                );
                $level3 = $menu
                    ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                    ->where('menu.clientid', '=', $clientid)
                    ->where('menu.parent', '=', $val2->id)
                    ->where('rolemenu.role_id', '=', $role)
                    ->orderby('menu.order', 'asc')
                    ->get();
                $res3 = array();
                $index3 = 0;
                foreach ($level3 as $key3 => $val3) {
                    $res3[] = array(
                        'name' => $val3->name,
                        'route' => $val3->route,
                        'icon' => $val3->icon,
                        'level' => 3,
                        'navigasi' => false,
                        'child' => '',
                    );
                    $level4 = $menu
                        ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                        ->where('menu.clientid', '=', $clientid)
                        ->where('menu.parent', '=', $val3->id)
                        ->where('rolemenu.role_id', '=', $role)
                        ->orderby('menu.order', 'asc')
                        ->get();
                    $res4 = array();
                    $index4 = 0;
                    foreach ($level4 as $key4 => $val4) {
                        $res4[] = array(
                            'name' => $val4->name,
                            'route' => $val4->route,
                            'icon' => $val4->icon,
                            'level' => 4,
                            'navigasi' => false,
                            'child' => '',
                        );

                        $level5 = $menu
                            ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                            ->where('menu.clientid', '=', $clientid)
                            ->where('menu.parent', '=', $val4->id)
                            ->where('rolemenu.role_id', '=', $role)
                            ->orderby('menu.order', 'asc')
                            ->get();

                        $res5 = array();
                        $index5 = 0;
                        foreach ($level5 as $key5 => $val5) {
                            $res5[] = array(
                                'name' => $val5->name,
                                'route' => $val5->route,
                                'icon' => $val5->icon,
                                'level' => 5,
                                'navigasi' => false,
                                'child' => '',
                            );

                            $level6 = $menu
                                ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                                ->where('menu.clientid', '=', $clientid)
                                ->where('menu.parent', '=', $val5->id)
                                ->where('rolemenu.role_id', '=', $role)
                                ->orderby('menu.order', 'asc')
                                ->get();

                            $res6 = array();
                            foreach ($level6 as $key6 => $val6) {
                                $res6[] = array(
                                    'name' => $val6->name,
                                    'route' => $val6->route,
                                    'icon' => $val6->icon,
                                    'level' => 6,
                                    'navigasi' => false,
                                    'child' => '',
                                );
                            }

                            $res5[$index5]['child'] = $res6;
                            $index5++;
                        }

                        $res4[$index4]['child'] = $res5;
                        $index4++;
                    }
                    $res3[$index3]['child'] = $res4;
                    $index3++;
                }
                $res2[$index2]['child'] = $res3;
                $index2++;
            }
            $result[$index]['child'] = $res2;
            $index++;
        }
        return $result;
    }

    public function routeAuth()
    {

        $routename = Route::currentRouteName();
        $routename = str_replace(".index", "", $routename);
        if($routename != 'home'){
            $role = Session::get('role');
            $menu = new Menu();
            $result = $menu
                ->leftjoin('rolemenu', 'rolemenu.id', '=', 'menu.id')
                ->where('menu.route', '=', $routename)
                ->where('rolemenu.role_id', '=', $role)
                ->get();

            if (count($result) > 0) {
                return true;
            } else {
                return false;
            }
        }else{
            return true;
        }

    }
}
