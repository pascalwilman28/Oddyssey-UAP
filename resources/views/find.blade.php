@extends('layouts.app')
@section('title', 'Search Game')
@section('content')

    @include('layouts.navbar')
    <br>
    @include('layouts.search')

    <div class="container">
        @if ($games->isEmpty())
            <div class="card col-12 text-center fs-6 mt-4 p-2">
                Sorry, Data not Provided!
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-5 mt-4 g-4">
                @forelse ($games as $game)
                    <a href="/game/{{ encrypt($game->id) }}" class="text-decoration-none text-dark">
                        <div class="col">
                            <div class="card h-100 shadow-sm bg-white rounded">
                                <img src="{{ asset('storage/' . $game->game_image . 'header.jpg') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body h-100">
                                    <h5 class="card-title text-truncate">{{ $game->title }}</h5>
                                    <p class="text-muted card-text truncate-text">
                                        {{ $game->description }}</p>
                                </div>
                                <div class="card-body text-end">
                                    @if ($game->price == 0)
                                        FREE
                                    @else
                                        @indonesian($game->price)
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>

            <div class="d-flex justify-content-between mt-4">
                <div class="pageof">
                    Showing Page {{ $games->currentPage() }} | Per Page {{ $games->perPage() }} of
                    {{ $games->total() }}
                </div>
                <div class="pagination">
                    {{ $games->appends($_GET)->links() }}
                </div>
            </div>
        @endif
    </div>


@endsection
