<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get ('/ironman', function(){
    return view('ironman');
})->name('ironman');

Route::get ('/captainamerica', function(){
    return view('captainamerica');
})->name('captainamerica');
