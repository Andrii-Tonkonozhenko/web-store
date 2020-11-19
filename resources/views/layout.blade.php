<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .footer {
            position: fixed;
            left: 0;
            margin-top: 30px;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body class="bg-white text-dark">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light text-dark border-bottom shadow-sm">
    <h2 class="my-0 mr-md-auto font-weight-normal" style="margin-left: 125px">Amantis Technology</h2>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="mr-4 p-2 text-dark h4" href="/">Home</a>
        <a class="mr-5 p-2 text-dark h4" href="{{ route('smartphone.index') }}">Smartphones</a>
        <a class="mr-5 p-2 text-dark h4" href='#'>Samsung</a>
        <a class="mr-5 p-2 text-dark h4" href='#'>iPhone</a>
        <a class="mr-5 p-2 text-dark h4" href='#'>Realme</a>
    </nav>
    <a class="btn btn-info h5" href="#">CART</a>
</div>
<div class="container mt-5">
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/register.js') }}" defer></script>
</div>
<!-- Footer -->
<footer class="footer navbar-fixed-bottom row-fluid bg-dark text-white">
    <div class="navbar-inner">
        <div class="container">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/" class="text-white"> MDBootstrap.com</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
