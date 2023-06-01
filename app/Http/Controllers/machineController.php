<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class machineController extends Controller
{
   public function machine(): view 
   {
       return view('machine');
   }
}
