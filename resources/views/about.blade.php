@extends('layouts.master')
@include('inc.navbar-fixed')

@section('header')
    <header class="background-white">
        <img src="{{ asset('assets/img/about/header.sedipro.jpg') }}" class="img-responsive all-image">
    </header>
@endsection

@section('content')
<section class="background background-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>¿ Quienes Somos?</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="font-medium">
                    Somos una organización de voluntarios integrada por estudiantes de diversas
                    carreras profesionales de la Universidad César Vallejo – Sede Trujillo.
                    Promovemos e incrementamos los conocimientos en dirección de proyectos de los
                    estudiantes para contribuir en la formación de los mismos a través de su aplicación,
                    de este modo contribuimos en el desarrollo y crecimiento del Perú.
                </p>
                <br><br>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-6 ">
                <i class="fa fa-lightbulb-o task-light" aria-hidden="true"></i>
                <h2>Visión</h2>
                <p class="font-medium">«Ser reconocidos como una comunidad estudiantil especializada en dirección de proyectos
                    que generen impacto dentro de la comunidad universitaria y sociedad.»
                </p>
            </div>
            <div class="col-md-6">
                <i class="fa fa-tasks task-light" aria-hidden="true"></i>
                <h2>Misión</h2>
                <p class="font-medium">
                    «Difundir y promover la aplicación de buenas prácticas en dirección de proyectos
                    reales bajo el enfoque del PMI.»
                </p>
            </div>
        </div>
    </div>
</section>

<section class="background background-gray">
    <div class="container">
        <div class="row">
            <h2>Nuestro Equipo</h2>
            <br><br>
        </div>
        <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/bryan.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/bryanaldair.martinezgrados.3" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Bryan Aldair Martínez Grados</h1>
                <h2>Presidente</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/estalin.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/EstalinCayetano" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Estalin Cayetano Corrales</h1>
                <h2>Vicepresidente</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/karito.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/beatriz.vargascruz1" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Karito Vargas Cruz</h1>
                <h2>Gerente PMO</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/ronny.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/rgracebartra" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Ronny Grace Bartra</h1>
                <h2>Gerente de Talento Humano</h2>
            </div>
        </div>
        <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/jhordy.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/jhordy.alexi" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Jhordy Alexi Del Aguila Quispe</h1>
                <h2>Gerente de Sistemas</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/yessenia.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/yesseniamilagritos" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Yessenia Milagritos Karolyn Asencios Rodriguez</h1>
                <h2>Gerente de Logística</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/about/team/eduardo.PNG">
                    <ul>
                        <li><a href="https://www.facebook.com/cezavaletal" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <h1>Cesar Eduardo Zavaleta León</h1>
                <h2>Gerente de Marketing y Comunicaciones</h2>
            </div>
        </div>
    </div>
    <br><br><br>
    <p>“Los proyectos no son el fin, son el medio para ser y hacer felices a los demás”</p>
</section>




@endsection