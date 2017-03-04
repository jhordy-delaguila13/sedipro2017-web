@extends('layouts.master')

@section('header')
    <header class="header">
        <!--
        <div class="text-horinzontal-left">
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-lg">Conocimientos</button>
                <button type="button" class="btn btn-default btn-lg">Proyectos</button>
                <button type="button" class="btn btn-default btn-lg">Integración</button>
            </div>
        </div>
        -->
    </header>
    @include('inc.navbar-static')
@endsection

@section('content')
    <section id="about" class="about">
        <div class="container">
            <br><br>
            <h1><span>!Hola, Somos SediproUCV!</span></h1>
            <br>
            <p>
                Sedipro UCV Trujillo, sección estudiantil de dirección de proyectos de la
                Universidad César Vallejo de Trujillo. Es una comunidad estudiantil que
                promueve y aplica las buenas prácticas en Dirección de Proyectos bajo el enfoque del PMI.
            </p>
            <ul class="list-inline">
                <li><a href="https://plus.google.com/107293147230348827586" target="_blank" class="social google-pluse btn btn-default"><i class="fa fa-google-plus fa-2x"></i></a></li>
                <li><a href="https://www.facebook.com/sediproUCV/" target="_blank" class="social facebook btn btn-default"><i class="fa fa-facebook fa-2x"></i></a></li>
                <li><a href="#" class="social youtube btn btn-default"><i class="fa fa-youtube fa-2x"></i></a></li>
            </ul>
            <h1><span></span></h1>
        </div>
    </section>
    <section class="background background-gray">
        <div class="container">
            <div class="row">
                <h2>Últimos Eventos</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/img/events/convocatoria1.jpg') }}" class="img-responsive">
                        <div class="caption">
                            <h3>Convocatoria 2017-1</h3>
                            <p class="description">
                                Hora : 6:00 PM
                                Lugar : 306 - Pabellón E.
                                Tú puedes ser quien estamos buscando! #SediproUCVTrujillo #ConvocatoriaSedipro2017
                            </p>
                            <p><a href="{{ url('events') }}" class="btn btn-default btn-block">Ver más</a></p>
                            <p><a href="#" class="btn btn-primary btn-block">Registrate</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/img/events/convocatoria2.jpg') }}" class="img-responsive">
                        <div class="caption">
                            <h3>Convocatoria 2017-1</h3>
                            <p class="description">
                                Ya puedes formar parte de Sedipro UCV - Sede Trujillo, para estudiantes de todas las escuelas profesionales!!
                            </p>
                            <p><a href="#" class="btn btn-default btn-block">Ver más</a></p>
                            <p><a href="#" class="btn btn-primary btn-block">Registrate</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/img/events/convocatoria3.jpg') }}" class="img-responsive">
                        <div class="caption">
                            <h4>Convocatoria 2017-1</h4>
                            <p class="description">
                                Vamos !! tú puedes ser parte de Sedipro UCV - Sede Trujillo, inscripciones abiertas para
                                estudiantes de todas las escuelas profesionales!!
                            </p>
                            <p><a href="#" class="btn btn-default btn-block">Ver más</a></p>
                            <p><a href="#" class="btn btn-primary btn-block">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="background background-blue">
        <div class="container">
            <div class="row">
                <h2 class="color-white">Nuestros Proyectos</h2>
            </div>
            <div class="row">
                <a href="https://drive.google.com/open?id=0BxRsIqUMzBrTOFBKSm1VbnQyYTg" target="_blank">PROYECTA - T</a>
            </div>
        </div>
    </section>

    <section class="background background-white">
        <div class="container">
            <div class="row">
                <h2>Nuestra Galeria</h2>
                <hr>
            </div>
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/img/home/gallery/seminario1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/seminario2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/seminario3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/seminario4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/seminario5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/voluntarios1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/home/gallery/voluntarios2.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="background">
        <div class="tex-center">
            <h2>Nuestros Colaboradores</h2>
        </div>
    </section>

    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-trophy" aria-hidden="true"></i> Reconocidos por:</h3>
                        </div>
                        <div class="panel-body">
                            * Universidad César Vallejo<br>
                            * Red Universitaria de Dirección de Proyectos<br>
                            * PMI Lima,Perú Chapter<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-angellist" aria-hidden="true"></i> Síguenos en nuestras redes sociales:</h3>
                        </div>
                        <div class="panel-body social-large">
                            <a href=""><i class="fa fa-facebook-square facebook-large" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-google-plus-official google-plus-large" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-youtube youtube-large" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">¿Tienes algo que decirnos?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                <p>¡Escríbenos a nuestro correo y te responderemos apenas podamos!</p>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ url('contact') }}" class="btn btn-primary btn-block">CONTÁCTANOS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection