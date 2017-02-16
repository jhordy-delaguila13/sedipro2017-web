@extends('layouts.app')

@section('header')
    <header>
        <div class="container wrap">
            <div class="tex-center">
                <img src="assets/img/logo_sediproucv.png" alt="SediproUCV">
            </div>
            <div class="jumbotron">
                <h2 class="titulo">Sección Estudiantil de Gestión de Proyectos</h2>
                <p class="lead-skill"><em>“Los proyectos no son el fin, son el medio para ser y hacer felices a los demás”</em></p>
                <ul class="list-inline">
                    <li><a href="#" class="btn btn-default btn-lg btn-red">CONOCIMIENTOS</a></li>
                    <li><a href="#" class="btn btn-default btn-lg btn-blue">PROYECTOS</a></li>
                    <li><a href="#" class="btn btn-default btn-lg btn-red">INTEGRACIÓN</a></li>
                </ul>
            </div>
        </div>
    </header>
@endsection

@section('navbar')
    @include('inc.navbar-static')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1>Nuestros Eventos</h1>
        </div>
        <div class="row tex-center">
            @for($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/170x100&text=one" alt="Paris" width="400" height="300">
                        <p><strong>Evento</strong></p>
                        <p>Yeah</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/170x100&text=one" alt="Paris" width="400" height="300">
                        <p><strong>Evento</strong></p>
                        <p>Yeah</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/170x100&text=one" alt="Paris" width="400" height="300">
                        <p><strong>Evento</strong></p>
                        <p>Yeah</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection