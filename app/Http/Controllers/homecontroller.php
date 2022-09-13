<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
   public function index()
   {
    return view('home',[
        'name' => 'toto',
        'html' => '<p> Salut </p>',
        'cars'=> ['Mercedes','VW','Renault'],
    ]);
   }
}
