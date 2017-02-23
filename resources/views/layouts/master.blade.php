<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sedipro UCV | Gestionando Proyectos</title>

        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>
        @yield('header')

        @yield('navbar')

        @yield('content')

        @yield('events')

        <footer>
            <div class="container">
                Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>
                SediproUCV
            </div>
        </footer>
        <script src="{{ asset('assets/bootstrap/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/js/carousel.js') }}"></script>

    </body>
</html>