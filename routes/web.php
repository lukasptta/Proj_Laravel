<?php

use App\Http\Controllers\Site\siteController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [siteController::class,'contacto']);