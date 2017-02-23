@extends('layouts.master')

@section('header')
    <header class="intro-header">
        <div class="container">
            <div class="jumbotron">
                <img src="{{ asset('assets/img/logo_sediproucv.png') }}" alt="SediproUCV">
                <h1 class="titulo">Sección Estudiantil de Gestión de Proyectos</h1>
                <p class="lead-skill"><em>“Los proyectos no son el fin, son el medio para ser y hacer felices a los demás”</em></p>

                <ul class="list-inline">
                    <li><a href="#" class="btn btn-default btn-lg btn-red">Conocimientos</a></li>
                    <li><a href="#" class="btn btn-default btn-lg btn-blue">Proyectos</a></li>
                    <li><a href="#" class="btn btn-default btn-lg btn-red">Integración</a></li>
                </ul>
            </div>
        </div>
    </header>
@endsection

@section('navbar')
    @include('inc.navbar-static')
@endsection

@section('content')
    <section class="container-blue">
        <div class="container">
            <h2><span>!Hola, Somos SediproUCV!</span></h2>
            <p>
                Sedipro UCV Trujillo, sección estudiantil de dirección de proyectos de la
                Universidad César Vallejo de Trujillo. Es una comunidad estudiantil que
                promueve y aplica las buenas prácticas en Dirección de Proyectos bajo el enfoque del PMI.
            </p>
            <h2><span></span></h2>
        </div>
    </section>
    <section>
        <div class="container padding-top">
            <div class="row">
                <h1>Convocatoria</h1>
                <hr>
            </div>
            <div class="row tex-center">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="{{ asset('assets/img/announcement/convocatoria1.jpg') }}" data-lightbox="image-1">
                                <img src="{{ asset('assets/img/announcement/convocatoria1.jpg') }}" class="img-responsive">
                            </a>
                            <div class="caption">
                                <h4>Convocatoria</h4>
                                <p>Hola</p>
                                <a href="#" class="btn btn-primary">Registrate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="{{ asset('assets/img/announcement/convocatoria2.jpg') }}" data-lightbox="image-1">
                                <img src="{{ asset('assets/img/announcement/convocatoria2.jpg') }}" class="img-responsive">
                            </a>
                            <div class="caption">
                                <h4>Convocatoria</h4>
                                <p>Hola</p>
                                <a href="#" class="btn btn-primary">Registrate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="{{ asset('assets/img/announcement/convocatoria3.jpg') }}" data-lightbox="image-1">
                                <img src="{{ asset('assets/img/announcement/convocatoria3.jpg') }}">
                            </a>
                            <div class="caption">
                                <h4>Convocatoria</h4>
                                <p>Hola</p>
                                <a href="#" class="btn btn-primary">Registrate</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3"><a href="#" class=""><img align="center" src="{{ asset('assets/img/collaborators/colegio.png') }}" alt="Image" style="max-width:50%;"></a></div>
                                    <div class="col-md-3" align="center"><a href="#" class="">

                                            <img src="{{ asset('assets/img/collaborators/pmi.png') }}" alt="Image" style="max-width:50%;"></a></div>
                                    <div class="col-md-3" align="center"><a href="#" class=""><img src="{{ asset('assets/img/collaborators/pmi-cajamarca.png') }}" alt="Image" style="max-width:50%;"></a></div>
                                    <div class="col-md-3"><a href="#" class=""><img src="{{ asset('assets/img/collaborators/rudp.png') }}" alt="Image" style="max-width:50%;"></a></div>
                                </div><!--.row-->
                            </div><!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3"><a href="#" class=""><img src="{{ asset('assets/img/collaborators/ucv.jpg') }}" alt="Image" style="max-width:100%;"></a></div>
                                    <div class="col-md-3"><a href="#" class=""><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                    <div class="col-md-3"><a href="#" class=""><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                    <div class="col-md-3"><a href="#" class=""><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                </div><!--.row-->
                            </div><!--.item-->

                        </div><!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div><!--.Carousel-->

                </div>
            </div>
        </div><!--.container-->
    </section>

@endsection