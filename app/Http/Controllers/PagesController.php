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

    public function equipe()
    {
        return view('equipe')->withTitle("L'équipe");
    }

    public function consultations()
    {
        return view('consultations')->withTitle('Consultations et honoraires');
    }

    public function hospitalisation()
    {
        return view('hospitalisation')->withTitle("L'hospitalisation");
    }

    public function liensUtiles()
    {
        return view('liens-utiles')->withTitle("Liens utiles");
    }
}
