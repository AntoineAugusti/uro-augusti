<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function contact()
    {
        return view('contact')->withTitle('Contact');
    }
}
