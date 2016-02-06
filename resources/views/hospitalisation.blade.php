@extends('partials.master')

<?php $jour = date('N'); ?>

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <h1>Charte du patient hospitalisé</h1>
      <p>
        L'objectif de la présente charte est de faire connaître aux personnes malades, accueillies dans les établissements de santé, leurs droits essentiels tels qu'ils sont affirmés par les lois aux droits des malades et à la qualité du système de santé.
      </p>
      <p>
        Le résumé de la charte est remis, dès son entrée dans l'établissement, à chaque personne hospitalisée ainsi qu'un questionnaire de sortie et un contrat d'engagement contre la douleur, annexés au livret d'accueil. Le document intégral de la charte est délivré, gratuitement, sans délai, sur simple demande, auprès du service chargé de l'accueil.
      </p>
      <p>
        La charte est consultable en intégralité sur le <a href="http://social-sante.gouv.fr/IMG/pdf/charte_a4_couleur.pdf">site du Ministère de la Santé</a>.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <h2 class="charte__titre-presentation">Principes fondamentaux de la charte</h2>
    </div>
    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#A64F9E">
      <h3 class="charte__titre">Toute personne est libre de choisir l'établissement de santé qui la prendra en charge</h3>
    </div>
    <div class="col-md-5 col-vertical-center charte__container" style="border-color:#F67700">
      <h3 class="charte__titre">Les établissements de santé garantissent la qualité de l'accueil, des traitements et des soins</h3>
    </div>

    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#0097B2">
      <h3 class="charte__titre">L'information donnée au patient doit être accessible et loyale</h3>
    </div>

    <div class="col-md-5 col-vertical-center charte__container" style="border-color:#FFB100">
      <h3 class="charte__titre">Un acte médical ne peut être pratiqué qu'avec le consentement libre et éclairé du patient</h3>
    </div>

    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#EC0081">
      <h3 class="charte__titre">Un consentement spécifique est prévu pour certains actes</h3>
    </div>

    <div class="col-md-5 col-vertical-center charte__container" style="border-color:#00836C">
      <h3 class="charte__titre">Une recherche biomédicale ne peut être réalisée sans que la personne ait donné son consentement après avoir été spécifiquement informée sur les bénéfices attendus, les contraintes et les risques prévisibles</h3>
    </div>

    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#81C02C">
      <h3 class="charte__titre">La personne hospitalisée peut, à tout moment, quitter l'établissement</h3>
    </div>

    <div class="col-md-5 col-vertical-center charte__container" style="border-color:#11B5B7">
      <h3 class="charte__titre">La personne hospitalisée est traitée avec égards</h3>
    </div>

    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#ED1416">
      <h3 class="charte__titre">Le respect de la vie privée est garanti à toute personne</h3>
    </div>

    <div class="col-md-5 col-vertical-center charte__container" style="border-color:#0069BA">
      <h3 class="charte__titre">La personne hospitalisée (ou ses représentants légaux) bénéficie d'un accès direct aux informations de santé la concernant</h3>
    </div>

    <div class="col-md-offset-1 col-md-5 col-vertical-center charte__container" style="border-color:#2B2A8B">
      <h3 class="charte__titre">La personne hospitalisée exprime ses observations sur les soins et sur l'accueil</h3>
    </div>
  </div>
@stop
