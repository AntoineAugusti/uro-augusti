<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    private $titles = [
        'consultations' => 'Consultations et honoraires',
        'contact' => 'Contact',
        'equipe' => "L'équipe",
        'home' => 'Docteur Michel Augusti',
        'hospitalisation' => "L'hospitalisation",
        'juridique' => 'Informations juridiques',
        'liens-utiles' => 'Liens utiles',
        'sites-operatoires' => 'Sites opératoires',
    ];

    private $descriptions = [
        'consultations' => 'Déroulement des consultations, documents à préparer, modalités de prise en charge et honoraires pratiqués par le Dr Michel Augusti',
        'contact' => "Prise de rendez-vous pour consultation avec le Dr Michel Augusti et demande d'informations",
        'equipe' => "Présentation de l'équipe assistant le Dr Michel Augusti, chirurgien urologue",
        'home' => 'Le Dr Michel Augusti est un chirurgien urologue exerçant dans la région dieppoise et rouennaise. Cancérologie, andrologie, incontinences et troubles urinaires, prolapsus, lithiases.',
        'hospitalisation' => "Déroulement de l'hospitalisation, papiers nécessaires et bien-être lors de votre séjour en clinique.",
        'juridique' => 'Informations légales, contacts juridiques, respect de la déontologie médicale',
        'liens-utiles' => "Liens utiles pour approfondir votre connaissance de l'urologie et de l'activité du Dr Michel Augusti.",
        'sites-operatoires' => "Lieux d'exercice du Dr Michel Augusti en région Haute-Normandie. Consultations et bloc opératoires à Dieppe et Rouen.",
    ];

    private function generalView($viewName)
    {
        $title = $this->titles[$viewName];
        $description = $this->descriptions[$viewName];

        $data = compact('title', 'description');

        return view($viewName, $data);
    }

    public function home()
    {
        return $this->generalView('home');
    }

    public function contact()
    {
        return $this->generalView('contact');
    }

    public function juridique()
    {
        return $this->generalView('juridique');
    }

    public function sitesOperatoires()
    {
        return $this->generalView('sites-operatoires');
    }

    public function equipe()
    {
        return $this->generalView('equipe');
    }

    public function consultations()
    {
        return $this->generalView('consultations');
    }

    public function hospitalisation()
    {
        return $this->generalView('hospitalisation');
    }

    public function liensUtiles()
    {
        return $this->generalView('liens-utiles');
    }
}
