<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControllerBAKA extends Controller
{
    // public function (){
    //     $pp  = asset('/assets/photos/pp.jpeg');
    //     return view('weHomeBAKA', ['pp' => $pp]);
    // }
    public function home(){
        $pp  = asset('/assets/photos/pp.jpeg');
        return view('weHomeBAKA', ['pp' => $pp]);
    }
    public function profile(){
        $pp  = asset('/assets/photos/pp.jpeg');
        return view('weProfileBAKA', ['pp' => $pp]);
    }
    public function exp(){
        $pp  = asset('/assets/photos/pp.jpeg');
        return view('weExpBAKA', ['pp' => $pp]);
    }
    public function portofolio(){
        $pp  = asset('/assets/photos/pp.jpeg');
        $sertipikat = asset('assets/photos/sertifikat.png');
        $seminar = asset('assets/photos/seminar.png');
        $android = asset('assets/photos/bikinmengaji.png');
        $sada = asset('assets/photos/sada.jpeg');
        return view('wePortofolioBAKA', ['pp' => $pp], ['sertipikat' => $sertipikat], ['seminar' => $seminar], ['android' => $android], ['sada' => $sada]);
    }
}
