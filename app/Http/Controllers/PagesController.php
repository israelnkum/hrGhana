<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function about(){

        return view('pages.about-us');
    }

    public function contact(){
        return view('pages.contact-us');
    }

    public function gallery(){
        return view('pages.gallery');
    }
    public function blog(){
        return view('pages.blog');
    }
}
