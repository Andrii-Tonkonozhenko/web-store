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
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body class="bg-white text-dark">

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light text-dark border-bottom shadow-sm">
    <h3 class="my-0 mr-md-auto font-weight-normal ml-4">Amantis Technology</h3>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-5 text-dark h4" href="/">Home</a>
        <a class="p-5 text-dark h4" href="/">Samsung</a>
        <a class="p-5 text-dark h4" href="/">Apple</a>
        <a class="p-5 text-dark h4" href="/">Realme</a>
        <a class="p-5 text-dark h4" href="#">About us</a>
    </nav>
    <a class="btn btn-info" href="#">Cart</a>
</header>

<div class="container-fluid mt-5">
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/register.js') }}" defer></script>
</div>

<footer class="footer py-3 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
    </div>
</footer>
</body>
</html>
