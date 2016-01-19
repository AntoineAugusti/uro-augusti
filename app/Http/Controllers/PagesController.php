<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function contact()
    {
        return view('contact')->withTitle('Contact');
    }

    public function juridique()
    {
        return view('juridique')->withTitle('Informations juridiques');
    }

    public function sitesOperatoires()
    {
        return view('sites-operatoires')->withTitle('Sites opératoires');
    }
}
