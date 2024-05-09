<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {

  //  $name = 'Muhammad Amirul';

    //return view('hello', compact('name'));
//});

Route::get('/', [CatController::class, 'index']);
