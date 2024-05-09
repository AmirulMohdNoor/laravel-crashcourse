<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Muhammad Amirul';

    return view('hello', compact('name'));
});
