@extends('partials.master')

@section('content')
    <!-- Heading Row -->
    <div class="row">
        @include('partials.banner')
        <div class="col-md-4 col-vertical-center">
            <img class="img-responsive img-rounded" src="assets/images/michel-augusti.jpg" alt="Michel Augusti">
        </div>
        <div class="col-md-8 col-vertical-center">
            <h1>Dr Michel Augusti</h1>
            <p>Bienvenue sur le site du Docteur Michel Augusti, chirurgien urologue exerçant en Haute-Normandie et plus particulièrement dans la région dieppoise. Sur ce site sont présentés les pathologies prises en charge, l'équipe du chirurgien et ses lieux d'exercice.</p>
            <p>Le Docteur Michel Augusti est Ancien Interne des Hôpitaux de Paris, Ancien Chef de Clinique à la Faculté Necker Enfants-malades. Il est accrédité par la Haute Autorité de la Santé (HAS) et participe activement aux traitements des cancers urologiques. Il prend en charge les pathologies urologiques de l'enfant et également les pathologies urologiques masculines et féminines.</p>
            <p>L'urologie est une spécialité médicale et chirurgicale. Les pathologies prisent en charges sont aussi bien la cancérologie (rein, vessie, prostate, testicules), que l'andrologie (maladie comme la dysfonction érectile de l'homme), l'incontinence urinaire féminine, les prolapsus (descente d'organe), et les troubles urinaires masculins (prostate et vessie). On peut y ajouter le traitement des lithiases (calculs).</p>
            <p>Son numéro <abbr title="Répertoire Partagé des Professionnels de Santé">RPPS</abbr> est le 10001914158.</p>
            <p>Bonne visite !</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <h2>Prise de rendez-vous</h2>
            <p>Le Docteur Michel Augusti consulte à la clinique Mégival, située en périphérie de la ville de Dieppe. La prise de rendez-vous se fait auprès de Roselyne, secrétaire dédiée à l'urologie ou <a href="{{ config('app.doctolib_url') }}" title="Rendez-vous sur Doctolib"> en ligne sur Doctolib</a>.</p>
            <a class="btn btn-default" href="{{ route('contact') }}">Plus d'informations</a>
        </div>
        <div class="col-md-4">
            <h2>L'équipe</h2>
            <p>Au bloc opératoire, l'aide est Béatrice. Plusieurs panseuses et panseurs sont formés à l'urologie pour gérer toutes les situations. Dans les étages d'hospitalisation conventionnelle, vous serez pris en charge par une équipe formée à l'urologie.</p>
            <a class="btn btn-default" href="{{ route('equipe') }}">Voir toute l'équipe et le bloc</a>
        </div>
        <div class="col-md-4">
            <h2>L'hospitalisation</h2>
            <p>Si vous devez être hospitalisé, vous serez pris en charge par une équipe formée et attentionnée. La charte de la personne hospitalisée assure votre bien être et vous confère des droits lors de votre hospitalisation.</p>
            <a class="btn btn-default" href="{{ route('hospitalisation') }}">Préparation et déroulement de l'hospitalisation</a>
        </div>
    </div>
@stop
