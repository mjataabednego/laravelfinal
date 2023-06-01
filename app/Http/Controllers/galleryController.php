<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class galleryController extends Controller
{
   public function gallery(): view
   {
       return view('gallery');
   }
}
