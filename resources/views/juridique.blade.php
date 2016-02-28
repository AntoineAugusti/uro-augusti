@extends('partials.master')

@section('content')
<div class="row">
  <div class="col-md-4">
  <h2>Responsabilité</h2>
    <p>
      Le Docteur Michel Augusti est responsable de ce site internet. Le contenu est élaboré et maintenu à jour par le Docteur Michel Augusti. <a href="https://www.antoine-augusti.fr">Antoine Augusti</a> est responsable de sa mise en œuvre technique.
    </p>

  <h2>Confidentialité</h2>
    <p>
      Le Docteur Michel Augusti, responsable de ce site, s'engage sur l'honneur à respecter les conditions légales de confidentialité applicables en France et à ne pas divulguer ces informations à des tiers. Aucune information personnelle n'est collectée lorsque vous visitez ce site web et il ne vous est pas possible de remplir un quelconque formulaire permettant la transmission de données personnelles. Aucun cookie n'est utilisé dans ce site.
    </p>
  <h2>Financement</h2>
    <p>
      Ce site (nom de domaine, hébergement et création) est financé exclusivement par le Docteur Michel Augusti. Ce site n'accepte pas et ne reçoit pas de fonds publicitaires.
    </p>
  <h2>Liens d'intérêt</h2>
    <p>
      À cette date, le Docteur Michel Augusti n’a aucun lien d’intérêts concernant les données diffusées sur ce site.
    </p>
  <h2>Contact</h2>
    <p>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Mise en garde</h3>
        </div>
        <div class="panel-body">
          L'envoi d'un email au Docteur Augusti n'est pas un moyen d'obtenir des renseignements de nature médicale et <b>ne permet pas de prendre des rendez-vous</b>. La prise de rendez-vous s'effectue uniquement <a href="{{ route('contact') }}">par téléphone</a>.
        </div>
      </div>

      En cas de remarques sur le contenu de ce site, le Docteur Michel Augusti peut être contacté à l'adresse email suivante.<br>
      <button type="button" class="btn btn-info secretariat-contact" aria-label="Téléphone">
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </button>
      <a href="mailto:m.augusti@megival.fr">m.augusti@megival.fr</a>

    </p>

  </div>
  <div class="col-md-8">
    <h2>Mise en garde du CNOM</h2>
    <p>Le Conseil national de l'Ordre des médecins (CNOM) invite les internautes à faire preuve d'esprit critique sur toutes les publications en ligne. La confiance que nos concitoyens accordent aux informations émanant du corps médical doit donc être soutenue avec une attention particulière. C'est la raison pour laquelle le CNOM a demandé à tous les médecins qui publient leur propre site professionnel d'afficher les points qui suivent :</p>
    <ul>
      <li>
        L'internaute doit pouvoir s'assurer que le site publiant des informations en santé est celui d'un médecin, s'il se présente comme tel. Le site professionnel du médecin doit faire apparaître, dans la page d'accueil, un lien avec la rubrique <a href="https://www.conseil-national.medecin.fr/annuaire" title="Annuaire du site web du CNOM">Annuaire du site web du CNOM</a> et un lien vers la page dédiée sur le site public du CNOM qui affiche les publications et <a href="https://www.conseil-national.medecin.fr/article/le-code-de-deontologie-medicale-915">recommandations ordinales relatives à la déontologie médicale sur le web</a>.
      </li>
      <li>
        Le site professionnel du médecin doit fournir des informations pratiques sur l'adresse, la spécialité, les titres reconnus, le mode d'exercice, les établissements de santé dans lesquels il intervient, les accès, la situation vis-à-vis des organismes de protection sociale.
      </li>
      <li>
        Quand  des informations en santé sont publiées sur ce site, les explications doivent être de nature purement informative sur les maladies, la prévention, les traitements, les techniques pratiquées. Le médecin doit présenter de façon objective les avantages et les éventuels inconvénients des actes, prescriptions, interventions. Il doit le faire de façon simple et pédagogique, et indiquer, le cas échéant, ses sources et références. Ces informations publiques peuvent venir compléter utilement celles qui auront été préalablement données à un patient lors d'une consultation. Dans ce cas, elles ne peuvent pas avoir vocation à les remplacer. Les dates de publication et/ou de mise à jour doivent être mentionnées.
      </li>
      <li>
        Lorsque le médecin n'est pas à même d'assurer lui-même des mises à jour régulières sur son site professionnel, le CNOM recommande que les informations soient alors préférentiellement délivrées par la création de liens vers des sites d'informations du grand public qui n'ont aucun intérêt de nature marchande.
      </li>
      <li>
        Lorsque le site publie, à titre d'illustration des propos, des images ou des photographies, aucune identification des personnes ne doit être possible. Ces documents ne doivent pas avoir une présentation qui serait de nature à laisser croire que le résultat escompté sera obtenu, ce qui serait une tromperie, quel que soit le domaine médical ou chirurgical concerné.
      </li>
      <li>
        Le site ne doit pas faire de publicité, ni directe ni indirecte, pour le médecin ou pour les organismes auxquels il prêterait son concours.
      </li>
      <li>
        Le site professionnel du médecin doit respecter strictement la confidentialité des données personnelles recueillies.
      </li>
      <li>
        Le médecin doit déclarer sur ce site ses liens d'intérêts avec toute firme en relation avec le domaine de la santé et du soin. Le cas échéant, il précise le financement du site et celui de sa maintenance
      </li>
    </ul>
  </div>
</div>
@stop
