<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class industryController extends Controller
{
    public function industry():view
    {
        return view('industry');
    }
}
