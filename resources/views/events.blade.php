@extends('layouts.master')

@include('inc.navbar-fixed')

@section('content')
    <section id="events" class="background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nuestros Eventos</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal1" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-search-plus fa-3x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/events/convocatoria1.jpg') }}" class="img-responsive">
                    </a>
                    <div class="events-caption">
                        <h4>Convocatoria 2017-1</h4>
                        <hr>
                        <p class="description">
                            Hora : 6:00 PM <br>
                            Lugar : 306 - Pabellón E. <br>
                            Tú puedes ser quien estamos buscando!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal2" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-search-plus fa-3x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/events/convocatoria2.jpg') }}" class="img-responsive">
                    </a>
                    <div class="events-caption">
                        <h4>Convocatoria 2017-1</h4>
                        <hr>
                        <p class="description">
                            Ya puedes formar parte de Sedipro UCV - Sede Trujillo, para estudiantes de todas las escuelas profesionales!!
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal3" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-search-plus fa-3x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/events/convocatoria3.jpg') }}" class="img-responsive">
                    </a>
                    <div class="events-caption">
                        <h4>Convocatoria 2017-1</h4>
                        <hr>
                        <p class="description">
                            Vamos !! tú puedes ser parte de Sedipro UCV - Sede Trujillo, inscripciones abiertas para
                            estudiantes de todas las escuelas profesionales!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('events.events-modal')

    <div class="container tex-center">
        <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
@endsection
