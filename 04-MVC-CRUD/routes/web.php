<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index']);

Route::get('/contact',function(){
    return "Hola desde CONTACT";
});

Route::get('/about',function(){
    return "Hola desde ABOUT";
});

Route::get('/courses/:slug',function($slug){
    return "Hola desde courses con variables y el param pasado es $slug <br>";
});


Route::dispatch();
?>