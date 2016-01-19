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
      <div class="google-maps">
        <iframe width="500" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;aq=&amp;sll=49.897509,1.073828&amp;sspn=0.030464,0.084028&amp;ie=UTF8&amp;hq=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=17129801944216765867&amp;ll=49.895298,1.078377&amp;spn=0.066349,0.171318&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
      </div>
      </p>
    </div>
</div>
@stop