<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
   $hello = '<h1>I am testing CI/CD with Laravel. I am so excited. I am so happy with this. love this. do you love this?</h1>';

   $content = '<h1>Hello, This is Shafiq. I am a web developer.</h1>';

   return $hello . $content;
});
