<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihan01 extends Controller
{
    function Beranda(){
        return view('Beranda');
    }

    function project(){
        return view('Homepage');
    }

    function komponen(){
        return view('Komponen');
    }

    function code(){
        return view('Code');
    }
}
