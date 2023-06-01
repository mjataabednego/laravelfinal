<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class postharvestController extends Controller
{
   public function postharvest(): view 
   {
       return view('postharvest');
   }
}
