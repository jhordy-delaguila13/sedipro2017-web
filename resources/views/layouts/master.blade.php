<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sedipro UCV | Gestionando Proyectos</title>

        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>


    </head>
    <body>
        @yield('header')
        @yield('content')
        <footer>
            <p class="container">
                <p class="panel-body social-large">
                    <a href="https://www.facebook.com/sediproUCV/" target="_blank"><i class="fa fa-facebook-square facebook-large" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com/107293147230348827586" target="_blank"><i class="fa fa-google-plus-official google-plus-large" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube youtube-large" aria-hidden="true"></i></a>
                </p>
                <p>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>
                    SediproUCV
                </p>
            </div>
        </footer>
        <script src="{{ asset('assets/bootstrap/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/function.js')}}"></script>

    </body>
</html>