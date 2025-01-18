<?php
//router
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
