@extends('partials.master')

@section('content')
    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive img-rounded" src="https://placehold.it/350x400" alt="">
        </div>
        <div class="col-md-8">
            <h1>Dr Michel Augusti</h1>
            <p>Bienvenue sur le site du Docteur Michel Augusti, chirurgien urologue exerçant en Haute-Normandie et plus particulièrement dans la région dieppoise et rouennaise. Sur ce site sont présentés les pathologies prises en charge, l'équipe du chirurgien et ses lieux d'exercice.<br>
            <br>
            Bonne visite !</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <h2>Heading 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
            <a class="btn btn-default" href="#">More Info</a>
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
