<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class warehouseController extends Controller
{
    public function warehouse():view 
    {
        return view('warehouse');
    }
}
