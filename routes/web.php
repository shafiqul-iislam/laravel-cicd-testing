<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
   $hello = '<h1>hello cicd world</h1>';

   return $hello;
});
