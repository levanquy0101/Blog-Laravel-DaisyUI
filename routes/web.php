<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog-grid', function () {
    return view('blog-grid');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
