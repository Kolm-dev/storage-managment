<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'App' }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>



<body>

    @section('header')
        <header class="header">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">Storage Management System</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- Burger --}}
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav  ml-auto">
                        @if (Auth::check())
                            <li class="nav-item mr-3"><button class="btn-primary"><a class="nav-link " href="/office">My
                                        Storages</a></button></li>
                            <li class="nav-item"><button class=" btn-danger "><a class="nav-link"
                                        href="/logout">Logout</a></button></li>
                        @endif




                </div>

        </header>
    @show('header')
    @yield('content')


</body>

</html>
