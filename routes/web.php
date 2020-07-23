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
    $pp  = asset('/assets/photos/pp.jpeg');
    return view('weHomeBAKA', ['pp' => $pp]);
});

Route::get('/home', function(){
    $pp  = asset('/assets/photos/pp.jpeg');
    return view('weHomeBAKA', ['pp' => $pp]);
});

Route::get('/profile', function(){
    $pp  = asset('/assets/photos/pp.jpeg');
    return view('weProfileBAKA', ['pp' => $pp]);
});

Route::get('/exp', function(){
    $pp  = asset('/assets/photos/pp.jpeg');
    return view('weExpBAKA', ['pp' => $pp]);
});

Route::get('/portofolio', function(){
    $pp  = asset('/assets/photos/pp.jpeg');
    $sertipikat = asset('assets/photos/sertifikat.png');
    $notfound = asset('assets/photos/imgnotfound.png');
    return view('wePortofolioBAKA', ['pp' => $pp], ['sertipikat' => $sertipikat], ['notfound' => $notfound]);
});

Route::fallback(function(){
    return "halaman tidak titemukan";
});