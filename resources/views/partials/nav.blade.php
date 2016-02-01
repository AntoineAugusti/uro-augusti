<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Activer la navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" title="Accueil">Docteur Michel Augusti</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('consultations') }}" title="Consultations">Consultations</a></li>
        <li><a href="{{ route('sites-operatoires') }}" title="Sites opératoires">Sites opératoires</a></li>
        <li><a href="{{ route('equipe') }}" title="L'équipe">L'équipe</a></li>
        <li><a href="{{ route('contact') }}" title="Contact et prise de rendez-vous">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
