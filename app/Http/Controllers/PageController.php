<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Kholid Maulidi, NIM : 2141720139';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }

    public function eduGames(){
        return 'Ini Halaman Edu Games';
    }

    public function eduKidsGames(){
        return 'Ini Halaman Edu Kids Games';
    }

    public function eduBooks(){
        return 'Ini Halaman Edu Story Books';
    }
}

