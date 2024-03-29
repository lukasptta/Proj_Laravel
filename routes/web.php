<?php

use App\Http\Controllers\Site\siteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupportController;


Route::get('/supports',[SupportController::class,'index'])->name('supports.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [SiteController::class,'contacto']);