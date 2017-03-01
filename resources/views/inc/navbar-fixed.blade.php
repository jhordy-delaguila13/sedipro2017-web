<style>
    body{
        padding-top: 50px;
    }
</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Sedipro UCV
                    </a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="row">
                        <div class="col-sm-10">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('about') }}">Acerca de Nosotros</a></li>
                                <li><a href="{{ url('events') }}">Eventos</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Galeria
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('#') }}">Imágenes</a></li>
                                        <li><a href="#" target="_blank">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('contact') }}">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="nav navbar-nav">
                                @if(1==0)
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                Jhordy
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Mi perfil</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Cerrar Sesión</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @else
                                    <li><a href="{{ url('login') }}" class="btn btn-primary btn-outline btn-circle">Iniciar Sesión</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
