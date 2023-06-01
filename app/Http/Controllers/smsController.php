<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class smsController extends Controller
{
    public function sms():view
    {
        return view('sms');
    }
}
