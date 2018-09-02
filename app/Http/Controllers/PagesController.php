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
        $data = scandir('img/');
        $newData =[];
        for ($i = 2; $i<count($data);$i++){
            if ($data[$i] != '.' || $data[$i] != '..'){

                array_push($newData,$data[$i]);
            }
        }
        // dd($newData);
        return view('pages.gallery')->with('newData',$newData);
    }
    public function blog(){
        return view('pages.blog');
    }
}
