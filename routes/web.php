<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
   $hello = '<h1>I am testing CI/CD with Laravel. I am so excited</h1>';

   return $hello;
});
