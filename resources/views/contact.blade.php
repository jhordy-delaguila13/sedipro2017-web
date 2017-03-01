@extends('layouts.master')
@include('inc.navbar-fixed')

@section('content')
    <section class="background background-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <div class="row">
                                    <h2>Contáctanos</h2>
                                    <p>
                                        “Los proyectos no son el fin, son el medio para ser y hacer felices a los demás”
                                    </p>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input id="name" name="name" type="text" placeholder="Nombre" class="form-control input-lg">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="name" name="name" type="text" placeholder="Correo Electrónico" class="form-control input-lg">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control input-lg" id="message" name="message" placeholder="Mensaje" rows="5"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary btn-lg">Envíanos tu Mensaje</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-angellist" aria-hidden="true"></i>
                                Tambien nos puedes contactar por nuestras redes sociales:
                            </h3>
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
    </section>
@endsection