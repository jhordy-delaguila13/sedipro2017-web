<nav id="top" class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Sedipro UCV</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('about') }}">Acerca de Nosotros</a></li>
                <li><a href="{{ url('events') }}">Eventos</a></li>
                <li><a href="{{ url('contact') }}">Contacto</a></li>
                <li><a href="{{ url('login') }}" class="btn  btn-default btn-navbar">Iniciar Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
