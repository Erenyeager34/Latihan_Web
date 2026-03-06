<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    return 'selamat datang';
    }

    public function about(){
        return 'Nama: Muhammad Yusuf <br> NIM: 23552021209';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID:' . $id;
    }
}
