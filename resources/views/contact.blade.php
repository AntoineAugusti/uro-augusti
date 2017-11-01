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
            <td>9h-12h</td>
          </tr>
          <tr data-day=2>
            <td>Mardi</td>
            <td>9h-13h et 14h-17h</td>
          </tr>
          <tr data-day=3>
            <td>Mercredi</td>
            <td>9h-12h</td>
          </tr>
          <tr data-day=4>
            <td>Jeudi</td>
            <td>9h-13h et 14h-17h</td>
          </tr>
          <tr data-day=5>
            <td>Vendredi</td>
            <td>9h-13h et 14h-16h</td>
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
        <iframe width="500" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;aq=&amp;sll=49.897509,1.073828&amp;sspn=0.030464,0.084028&amp;ie=UTF8&amp;hq=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=17129801944216765867&amp;ll=49.895298,1.078377&amp;spn=0.066349,0.171318&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
      </div>

      <p>
        <a class="btn btn-default" href="{{ route('sites-operatoires') }}">Tous les sites opératoires</a>
      </p>
    </div>
</div>
@stop
