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
        return '2141720016 Zahra Annisa Wahono';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
