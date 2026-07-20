<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/surprise', function( ){
    return View('surprise');
});
