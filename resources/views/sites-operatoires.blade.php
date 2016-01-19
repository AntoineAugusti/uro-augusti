@extends('partials.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
      <h2>Sites opératoires</h2>
      <p>Le Docteur Michel Augusti, chirurgien urologue, intervient dans les sites médicaux suivants.</p>
    </div>
</div>

<hr>

{{-- Mégival --}}
<div class="row">
    <div class="col-md-6">
      <h2><span class="badge badge-lieu">Dieppe</span> Clinique Mégival</h2>
        La <a href="http://www.megival.com" title="Clinique Mégival">clinique Mégival</a> est située en périphérie de Dieppe, à l'adresse suivante :<br>
      <div class="adresse-physique">
        Clinique Mégival<br>
        1328 avenue de la Maison Blanche<br>
        76550 Saint-Aubin-sur-Scie<br>
      </div>
      <h3>Accès</h3>
      <p>
        Un parking gratuit est disponible devant la clinique. Des places handicapées sont à votre disposition si vous êtes en situation de handicap. Un système de vidéosurveillance est en place.
      </p>
      <p>
        La clinique est accessible par <a href="http://www.stradibus.fr/horaires_ligne/?rub_code=6&thm_id=16&lign_id=49">la ligne 1</a> du réseau de bus Stradibus à l'arrêt <em>Clinique Mégival</em>, du lundi au samedi. Les dimanches et fêtes, vous devrez utiliser la <a href="http://www.stradibus.fr/horaires_ligne/?rub_code=6&thm_id=16&lign_id=43">ligne 14</a> pour vous rendre à l'arrêt <em>Val Druel</em> puis parcourir 1,5 km à pieds.
      </p>

      <p>
        <a class="btn btn-default" href="{{ route('contact') }}">Prendre rendez-vous</a>
      </p>
    </div>
    <div class="col-md-6">
      <div class="google-maps margin-top-50">
        <iframe width="500" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;aq=&amp;sll=49.897509,1.073828&amp;sspn=0.030464,0.084028&amp;ie=UTF8&amp;hq=Clinique+M%C3%A9gival+1328+avenue+de+la+Maison+Blanche+76550+Saint-Aubin-sur-Scie&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=17129801944216765867&amp;ll=49.895298,1.078377&amp;spn=0.066349,0.171318&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
      </div>
    </div>
</div>

<hr>

{{-- Les Aubépines --}}
<div class="row">
    <div class="col-md-6">
      <h2><span class="badge badge-lieu">Dieppe</span> Clinique des Aubépines</h2>
        La <a href="http://www.clinique-des-aubepines.fr/html/chirurgie.htm" title="Clinique des Aubépines">clinique des Aubépines</a> est située en périphérie de Dieppe, à proximité de la Clinique Mégival, à l'adresse suivante :<br>
      <div class="adresse-physique">
        Clinique des Aubépines<br>
        300 rue de la Providence<br>
        76550 Saint-Aubin-sur-Scie<br>
      </div>

      <h3>Accès</h3>
      <p>
        Un parking gratuit est disponible devant la clinique. Des places handicapées sont à votre disposition si vous êtes en situation de handicap. Un système de vidéosurveillance est en place.
      </p>
    </div>
    <div class="col-md-6">
      <div class="google-maps margin-top-50">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2570.0298752420795!2d1.0739837159526124!3d49.898242434879634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0a278619b1b5f%3A0x8374127f98ca94c4!2sCliniques+des+Aub%C3%A9pines!5e0!3m2!1sfr!2sfr!4v1453201748924" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
</div>

<hr>

{{-- Saint-Hilaire --}}
<div class="row">
    <div class="col-md-6">
      <h2><span class="badge badge-lieu">Rouen</span> Clinique Saint-Hilaire</h2>
        La <a href="http://www.clinique-sainthilaire.fr" title="Clinique Saint-Hilaire">clinique Saint-Hilaire</a> est située, à proximité du CHU de Rouen, à l'adresse suivante :<br>
      <div class="adresse-physique">
        Clinique Saint-Hilaire<br>
        2 place Saint-Hilaire<br>
        76000 Rouen<br>
      </div>

      <h3>Accès</h3>
      <p>
        Un parking gratuit pendant 1h est disponible devant la clinique. Des places handicapées sont à votre disposition si vous êtes en situation de handicap. Un système de vidéosurveillance est en place.
      </p>
      <p>
        La clinique est accessible via les transports en commun du <a href="http://reseau-astuce.fr" title="Réseau Astuce">réseau Astuce</a> de l'agglomération de Rouen :
        <ul>
          <li>Métro : station terminus <em>Boulingrin</em> (à 500 m)</li>
          <li>Métrobus TEOR lignes 1, 2 et 3 : station <em>Saint-Hilaire</em> (en face de la clinique)</li>
        </ul>
      </p>
    </div>
    <div class="col-md-6">
      <div class="google-maps margin-top-50">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10377.047141200135!2d1.114!3d49.441769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7c928bdde19b64!2sClinique+Saint-Hilaire!5e0!3m2!1sen!2sus!4v1453203671979" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
</div>

@stop
