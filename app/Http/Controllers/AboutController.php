<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  


    public function index()
    {
     return view('a-propos',[
         'devs'=> ['Matthieu','Gwenael','Dylan'],
     ]);
    }  

    public function show($id)
    {
        return view('about-show',[
            'id'=> $id
        ]);
    }
}
