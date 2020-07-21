<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    $image  = asset('/upload_media/photos/pp.jpeg');
    return view('layout/weMainBAKA', ['image' => $image]);
});

Route::get('/home', function(){
    $image  = asset('/upload_media/photos/pp.jpeg');
    return view('layout/weMainBAKA', ['image' => $image]);
});

Route::get('/profile', function(){
    return view('weProfileBAKA');
});

Route::get('/exp', function(){
    return view('weExpBAKA');
});

Route::get('/portofolio', function(){
    return view('wePortofolioBAKA');
});