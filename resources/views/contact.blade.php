@extends('partials.master')

@section('content')
<div class="row">
    <div class="col-md-6">
      <h2>Secrétariat</h2>
      <p>La prise de rendez-vous ne peut s'effectuer qu'en passant par le secrétariat. Les horaires d'ouverture du secrétariat du Docteur Michel Augusti sont les suivantes.</p>
      <p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Jour de la semaine</th>
            <th>Heures d'ouverture</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lundi</td>
            <td>9h00-12h00</td>
          </tr>
          <tr>
            <td>Mardi</td>
            <td>9h00-17h00</td>
          </tr>
          <tr>
            <td>Mercredi</td>
            <td>9h00-12h00</td>
          </tr>
          <tr>
            <td>Jeudi</td>
            <td>9h00-17h00</td>
          </tr>
          <tr>
            <td>Vendredi</td>
            <td>9h00-17h00</td>
          </tr>
        </tbody>
      </table>
      </p>
      <p>
        La prise de rendez-vous s'effectue uniquement par téléphone.<br>
        <button type="button" class="btn btn-info secretariat-contact" aria-label="Téléphone">
        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
        </button>
        02 76 20 30 70
      </p>
      <h3>Mise en garde</h3>
      Pendant la fermeture du secrétariat, appelez si besoin la Clinique Mégival au 02 76 20 30 40.<br>
      <br>
      Le secrétariat n'est pas un moyen d'obtenir des renseignements de nature médicale. En cas de situation urgente ou confuse, contactez les urgences en téléphonant au 15 ou au 112.
    </div>
    <div class="col-md-6">
      <h2>Clinique Mégival</h2>
      <p>
        Le Docteur Michel Augusti consulte principalement à la Clinique Mégival. La clinique Mégival est située en périphérie de Dieppe, à l'adresse suivante:<br>
      <div class="megival-contact">
        1328 avenue de la Maison Blanche<br>
        76550 Saint-Aubin-sur-Scie<br>
      </div>
      <img class="img-responsive img-rounded" src="https://placehold.it/550x250" alt="">
      </p>
    </div>
</div>
@stop
