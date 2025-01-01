<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = array(
        'title' => 'Home Page sdsd',
        'description' => 'This is the home page',
        'footer' => 'Footer text',
    );

    return view('welcome', $data)->with('data', $data);
});
