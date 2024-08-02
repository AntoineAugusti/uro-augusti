@extends('partials.master')

<?php $jour = date('N'); ?>

@section('content')
<div class="row">
    <div class="col-md-6">
      <h2>En ligne</h2>
      <p>
        Il est possible de prendre rendez-vous <a href="{{ config('app.doctolib_url') }}" title="Rendez-vous sur Doctolib">sur le site web de Doctolib</a>.
      </p>

      <h2>Par téléphone</h2>
      <p>La prise de rendez-vous peut s'effectuer également par le secrétariat téléphonique. Les horaires d'ouverture du secrétariat du Docteur Michel Augusti sont les suivantes.</p>
      <p>
        Prise de rendez-vous par téléphone :
        <button type="button" class="btn secretariat-contact" aria-label="Téléphone">
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
        </button>
        <a href="tel:+33276203070">02 76 20 30 70</a>
      </p>
      <p>
      <h3>Horaires d'ouverture du secrétariat</h3>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Jour de la semaine</th>
            <th>Heures d'ouverture</th>
          </tr>
        </thead>
        <tbody>
          <tr data-day=1>
            <td>Lundi</td>
            <td>Fermé</td>
          </tr>
          <tr data-day=2>
            <td>Mardi</td>
            <td>9h-15h</td>
          </tr>
          <tr data-day=3>
            <td>Mercredi</td>
            <td>Fermé</td>
          </tr>
          <tr data-day=4>
            <td>Jeudi</td>
            <td>9h-15h</td>
          </tr>
          <tr data-day=5>
            <td>Vendredi</td>
            <td>Fermé</td>
          </tr>
        </tbody>
      </table>
      </p>

      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Mise en garde</h3>
        </div>
        <div class="panel-body">
          Pendant la fermeture du secrétariat, appelez si besoin la Clinique Mégival au <a href="tel:+33276203040">02 76 20 30 40</a>.<br>
          <br>
          Le secrétariat n'est pas un moyen d'obtenir des renseignements de nature médicale. En cas de situation urgente ou confuse, contactez les urgences en téléphonant au <a href="tel:15">15</a> ou au <a href="tel:122">112</a>.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h2>Clinique Mégival</h2>
      <p>
        Le Docteur Michel Augusti consulte à la Clinique Mégival. La clinique Mégival est située en périphérie de Dieppe, à l'adresse suivante :<br>
      <div class="adresse-physique">
        Clinique Mégival<br>
        1328 avenue de la Maison Blanche<br>
        76550 Saint-Aubin-sur-Scie<br>
      </div>
      <div class="google-maps">
        <img class="img-responsive img-rounded" src="assets/images/clinique-megival.jpg" alt="Clinique Mégival">
      </div>
    </div>
</div>
@stop
