<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users' ,function(){
    return view ('users');
});
Route::get('/posts' ,function(){
    return view ('posts');
});