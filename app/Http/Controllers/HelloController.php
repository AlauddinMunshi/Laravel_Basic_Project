<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
