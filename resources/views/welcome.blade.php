<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EOSPortal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!--
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
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

        <h1 class="text-center p-4 m-4">Testnets</h1>
        <div class="d-flex justify-content-center">
            <div class="card w-100 m-2">
                <div class="card-body">
                    <h5 class="card-title">Community</h5>
                    <h6 class="card-subtitle mb-2 text-muted">This is the comunity net.</h6>
                    <p class="card-text">Here everyone is welcome to try out EOS!</p>
                    <a href="{{ url('/net/comunity') }}" class="card-link">Visit</a>
                </div>
            </div>
            <div class="card w-100 m-2">
                <div class="card-body">
                    <h5 class="card-title">Jungle</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Wild wild west</h6>
                    <p class="card-text">Roin id est eget massa lacinia condimentum ac hendrerit ante.</p>
                    <a href="{{ url('/net/jungle') }}" class="card-link">Visit</a>
                </div>
            </div>
            <div class="card w-100 m-2">
                <div class="card-body">
                    <h5 class="card-title">EOSNet</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Main testnet</h6>
                    <p class="card-text">Curabitur at luctus risus, eget vestibulum arcu. Nunc venenatis bibendum ex.</p>
                    <a href="{{ url('/net/eosnet') }}" class="card-link">Visit</a>
                </div>
            </div>
            <div class="card w-100 m-2">
                <div class="card-body">
                    <h5 class="card-title">Scholar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Analysis and testing</h6>
                    <p class="card-text">Suspendisse purus dui, tristique at accumsan sed, vulputate in justo.</p>
                    <a href="{{ url('/net/scholar') }}" class="card-link">Visit</a>
                </div>
            </div>
            <div class="card w-100 m-2">
                <div class="card-body">
                    <h5 class="card-title">Arrowhead</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Performance testing</h6>
                    <p class="card-text">Nulla semper urna nisi, ut aliquet sapien dictum pretium. Praesent ligula sapien</p>
                    <a href="{{ url('/net/arrowhead') }}" class="card-link">Visit</a>
                </div>
            </div>
        </div>
    </body>
</html>
