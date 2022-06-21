@extends('layouts.app')
@section('title','Home')
@section('content')

@include('layouts.navbar')
<br>
@include('layouts.search')

<div class="container">
    <p class="fs-4 mt-4">Featured Games</p>
    <div class="row row-cols-1 row-cols-md-5 g-2">
        @foreach ($featuredGames as $fGames)
        <a href="/game/{{ encrypt($fGames->id) }}" class="text-decoration-none text-dark">
            <div class="col">
                <div class="card h-100 shadow-sm bg-white rounded">
                    <img src="{{ asset('storage/'.$fGames->game_image.'header.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $fGames->title }}</h5>
                        <p class="text-muted card-text truncate-text">
                            {{ $fGames->description }}</p>
                    </div>
                    <div class="card-body text-end">
                        @if ($fGames->price == 0)
                            FREE
                        @else
                            @indonesian($fGames->price)
                        @endif
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <br>
    <p class="fs-4 font-weight-bold">Hot Games</p>
    @foreach ($hotGames as $hGames)
    <a href="/game/{{ encrypt($hGames->id) }}" class="text-decoration-none text-dark">
        <div class="card mb-12 shadow-sm mb-2 bg-white rounded">
            <div class="d-flex align-items-center justify-content-sm-between">
                <div class="col-md-2">
                    <img src="{{ asset('storage/'.$hGames->game_image.'header.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hGames->title }}</h5>
                        <p class="card-text"><small class="text-muted">{{ $hGames->categoryName }}</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body">
                        <h5 class="text-end">
                            @if ($hGames->price == 0)
                                FREE
                            @else
                                @indonesian($hGames->price)
                            @endif
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
<br>
@endsection
