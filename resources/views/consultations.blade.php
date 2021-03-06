@extends('partials.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Consultations</h1>
  </div>
  <div class="col-md-6">
    <a href="{{ route('contact') }}"><h3>Comment prendre rendez-vous</h3></a>
    <p>
      Les consultations se font exclusivement par rendez-vous sur le site de la Clinique Mégival. Vous pouvez consulter directement sans passer par votre médecin traitant, mais dans ce cas, vous aurez un remboursement moindre par l'Assurance Maladie. Si vous êtes en suivi, il n'y a pas besoin de courrier de la part de votre médecin traitant.
    </p>
    <a class="btn btn-default" href="{{ route('contact') }}">Prendre rendez-vous</a>
  </div>

  <div class="col-md-6">
    <h3>Préparer votre consultation</h3>
    <p>
      Si vous avez une <u>lettre</u> de votre médecin traitant ou d'un autre médecin, pensez à l'apporter. Apportez toujours l'<u>ordonnance de votre traitement</u> en cours, les radiographies et les autres examens (prise de sang, analyses d'urines...) déjà effectués.<br>
      <br>
      Si vous avez des problèmes de fréquence ou de perte d'urine, il sera utile de réaliser <a href="assets/documents/catalogue-mictionnel.pdf" title="Catalogue mictionnel">un catalogue mictionnel</a> ou un <a href="assets/documents/pad-test.pdf" title="Questionnaire du Pad Test">Pad Test</a>. Vous pouvez également remplir <a href="assets/documents/questionnaire-symptomes-urinaires.pdf" title="Questionnaire du Pad Test">le questionnaire de symptômes urinaires</a>.
    </p>
  </div>
</div>
<hr>

<div class="row">
    <div class="col-md-6">
      <h2>Honoraires médicaux en clinique</h2>
      <p>À l'hôpital, les médecins sont salariés : ils touchent un salaire fixe quelque soit leur activité. En clinique, l'Assurance Maladie rémunère les médecins en fonction de leur activité, c'est la rémunération <em>à l'acte</em>.</p>
      <p>
        Chaque acte se voit attribuer un code. Ce code correspond à un montant précis, que l'Assurance Maladie versera au médecin lorsqu'il réalisera l'acte. Il est utile de noter que le montant des actes n'a pas été réévalué depuis plus de 20 ans.
      </p>
    </div>
    <div class="col-md-6">
      <h2>Montant des honoraires</h2>
      <p>
        Le Docteur Michel Augusti est un chirurgien spécialiste <em>conventionné secteur 2 non adhérent à l'<abbr title="Option pratique tarifaire maîtrisée">OPTAM</abbr></em>. Les tarifs usuellement pratiqués par le Docteur Michel Augusti sont visibles sur <a href="http://annuairesante.ameli.fr/nouvelle-recherche/professionnels-de-sante.html">le site de l'Assurance Maladie</a>. Le montant des honoraires est fixé en consultation et un devis est établi et vous sera expliqué. Il mentionne la codification de l'acte, le montant de base et le montant d'un éventuel complément d'honoraire.
      </p>
      <p>
        Ce devis vous permet lors d'un simple appel téléphonique à votre mutuelle d'obtenir le montant de votre remboursement et ce qui restera éventuellement à votre charge (<abbr title="Reste à Charge">RAC</abbr>).
      </p>
    </div>
</div>


<div class="row">
  <div class="col-lg-12">
    <h2>Questions et réponses</h2>
  </div>
</div>

<div class="row margin-top-50">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Qu'appelle-t-on le secteur 2 / non adhérent à l'OPTAM ? </div>
      <div class="panel-body">
        Les tarifs pratiqués par les médecins conventionnés secteur 2 non adhérent à l'OPTAM, sont libres et fixés par le médecin, avec, selon les exigences de la caisse d'Assurance Maladie, tact et mesure. Les médecins exerçant en secteur 2 ont une importante majoration (par comparaison à leurs confrères du secteur 1) de leur cotisations sociales obligatoires : URSSAF, Caisse de retraite, Assurance Maladie.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Comment sont fixés les honoraires ?</div>
      <div class="panel-body">
        Les principaux critères de jugements sont la difficulté technique, la durée de l'acte opératoire, le degré de spécialisation, la qualification et l'expérience acquise. Ceux-ci permettent au praticien de définir le montant de ses honoraires. Le médecin peut décider de fixer, en fonction de ces critères, le prix de l'acte en utilisant un facteur multiplicatif du montant de base de l'acte, ou de n'appliquer aucun complément.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Qui paye le complément d'honoraire ?</div>
      <div class="panel-body">
          Quelque soit le montant des dépassements, l'Assurance Maladie n'en supporte jamais les frais. Si vous n'avez pas de mutuelle complémentaire, le complément d'honoraire sera à votre charge.<br>
          <br>
          Si vous avez une mutuelle complémentaire, cela dépendra du type de contrat que vous avez souscrit. S'il est spécifié que votre mutuelle rembourse 100 % du tarif opposable, cela signifie qu'aucun complément d'honoraire ne sera remboursé. Un remboursement à 200 % du tarif opposable implique que vous serez remboursé intégralement jusqu'à 2 fois le montant de base de l'acte.
      </div>
    </div>

  </div>
</div>

@stop
