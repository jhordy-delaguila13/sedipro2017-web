@extends('layouts.master')

@section('navbar')
    @include('inc.navbar-fixed')
@endsection

@section('events')
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Eventos</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal1" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal2" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal3" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal4" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal5" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events-item">
                    <a href="#portfolioModal6" class="events-link" data-toggle="modal">
                        <div class="events-hover">
                            <div class="events-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('http://placehold.it/750x450') }}" class="img-responsive" alt="">
                    </a>
                    <div class="events-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
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