@extends('partials.master')

@section('content')
    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive img-rounded" src="assets/images/michel-augusti.jpg" alt="Michel Augusti">
        </div>
        <div class="col-md-8">
            <h1>Dr Michel Augusti</h1>
            <p>Bienvenue sur le site du Docteur Michel Augusti, chirurgien urologue exerçant en Haute-Normandie et plus particulièrement dans la région dieppoise et rouennaise. Sur ce site sont présentés les pathologies prises en charge, l'équipe du chirurgien et ses lieux d'exercice.</p>
            <p>Le Docteur Michel Augusti est un ancien interne des Hôpitaux de Paris, ancien Chef de Clinique à la Faculté, est impliqué dans la Haute Autorité de la Santé (HAS) et participe activement à la lutte contre la cancérologie. Il prend en charge les pathologies urologiques de l'enfant (ancien Chef de Clinique à Paris Necker enfants-malades) et également des pathologies masculines et féminines (cancérologie, andrologie et incontinence). Son numéro RPPS est le 10001914158.</p>
            <p>Bonne visite !</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <h2>Prise de rendez-vous</h2>
            <p>Le Docteur Michel Augusti consulte principalement à la clinique Mégival, située en périphérie de la ville de Dieppe. La prise de rendez-vous se fait uniquement par le biais d'un appel à son secrétariat.</p>
            <a class="btn btn-default" href="{{ route('contact') }}">Plus d'informations</a>
        </div>
        <div class="col-md-4">
            <h2>Heading 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        <div class="col-md-4">
            <h2>Heading 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        @yield('content')
    </div>
@stop
