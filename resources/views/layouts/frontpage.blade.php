<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EOSPortal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="l-header">
    <nav class="container navbar navbar-expand-lg">

        <div class="mx-auto">
            <a class="navbar-brand" href="#">EOSPortal</a>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="masthead">
    <div class="container">
        <h1 class="display-5">The Dawn is here!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mollis nulla, vel lobortis lacus. Curabitur tempus efficitur eros vel ornare. Ut convallis, erat sit amet venenatis cursus, dui augue pharetra nibh, eget condimentum augue odio a urna.</p>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
