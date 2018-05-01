
@extends('layouts.frontpage')

@section('content')

    <h1 class="text-center p-4 m-4">Testnets</h1>

    <div class="d-flex justify-content-center">
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
                <h5 class="card-title">Community</h5>
                <h6 class="card-subtitle mb-2 text-muted">This is the comunity net.</h6>
                <p class="card-text">Here everyone is welcome to try out EOS!</p>
                <a href="{{ url('/net/comunity') }}" class="card-link">Visit</a>
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

@endsection
