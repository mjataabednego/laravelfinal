<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class blogController extends Controller
{
    public function blog(): view 
    {
        return view('blog');
    }
}
