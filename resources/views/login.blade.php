@extends('layouts.master')
@include('inc.navbar-fixed')

@section('content')
    <section>
        <div class="container-fluid tex-center padding">
            <div class="row no-gutter">
                <div class="col-md-7 conceal">
                    <img src="assets/img/login/header.sedipro.jpg" alt="" class="img-responsive all-image">
                </div>
                <div class="col-md-5">
                    <br><br>
                    <h2>Bienvenido a Sedipro UCV</h2>
                    <hr class="divide">
                    <p>Regístrate con</p>
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="#">
                            <div class="input-group">
                                <span class="input-group-addon addon-facebook">
                                    <i class="fa fa-fw fa-2x fa-facebook fa-fw"></i>
                                </span>
                                <a class="btn btn-lg btn-block btn-facebook" href="#">Facebook</a>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon addon-google">
                                    <i class="fa fa-fw fa-2x fa-google-plus-official fa-fw"></i>
                                </span>
                                <a class="btn btn-lg btn-block btn-google" href="#">Google</a>
                            </div>
                            <br>
                            <p>You agree to the <strong>Terms & Conditions</strong>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
