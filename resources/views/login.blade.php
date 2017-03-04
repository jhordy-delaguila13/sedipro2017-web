@extends('layouts.master')
@include('inc.navbar-fixed')

@section('content')
    <section class="background-gray">
        <div class="container-fluid tex-center padding">
            <div class="row no-gutter">
                <div class="col-md-7 conceal">
                    <img src="{{ asset('assets/img/portada1.jpg') }}" alt="" class="img-responsive all-image">
                </div>
                <div class="col-md-5">
                    <br><br>
                    <h2>Bienvenido a Sedipro UCV</h2>
                    <hr class="divide">
                    <p>Regístrate con</p>
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="#">
                            <div>
                                <a class="btn btn-lg btn-block btn-google" href="#">
                                    <i class="fa fa-google-plus-official"></i>
                                    &nbsp;&nbsp;ENTRAR CON GOOGLE+
                                </a>
                            </div>
                            <br>
                            <div>
                                <a class="btn btn-lg btn-block btn-facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                    &nbsp;&nbsp;ENTRAR CON FACEBOOK
                                </a>
                            </div>
                            <br>
                            <br>
                            <p>You agree to the <strong>Terms & Conditions</strong>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
