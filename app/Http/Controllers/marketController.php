<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class marketController extends Controller
{
   public function market(): view 
   {
       return view('market');
   }
}