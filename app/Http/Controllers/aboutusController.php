<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class aboutusController extends Controller
{
    public function about(): view
    {
        return view('aboutus');
    }
}
