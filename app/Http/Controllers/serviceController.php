<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class serviceController extends Controller
{
    public function service(): view 
    {
        return view('service');
    }
}
