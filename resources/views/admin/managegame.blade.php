@extends('layouts.app')
@section('title','Manage Game')
@include('layouts.navbar')
@section('content')

<div class="container">
    <div class="p-4 text-center">
        <a href="{{ route('addGame') }}" class="btn btn-dark">ADD NEW GAME</a>
    </div>
    <div>
         {{-- Session Message --}}
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="required-field">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @forelse ($Games as $game)
                <div class="card mb-12 shadow-sm mb-1 bg-white rounded">
                    <div class="d-flex align-items-center justify-content-sm-between">
                        <div class="col-md-3">
                            <img src="{{ asset('storage/'.$game->game_image.'header.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game->title }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">{{ $game->categories->categoryName }}</small>
                                    <br>
                                    <small class="text-muted">last updated at {{ $game->updated_at }}</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body">
                                <h5 class="text-end">
                                    @if ($game->price == 0)
                                        FREE
                                    @else
                                        @indonesian($game->price)
                                    @endif
                                </h5>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="/admin/updategame/{{ encrypt($game->id) }}" class="btn btn-primary mx-2">UPDATE</a>
                                    <a href="/admin/deletegame/{{ encrypt($game->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete game {{ $game->title }}?');">DELETE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @empty
            <div class="card mb-12 shadow-sm p-4 text-center bg-white rounded">
                Sorry, Data is not available!
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-between mt-4">
        <div class="pageof">
          Showing Page {{ $Games->currentPage() }} | Per Page {{ $Games->perPage() }} of {{ $Games->total() }}
        </div>
        <div class="pagination">
          {{$Games->appends($_GET)->links()}} 
        </div>
      </div>
</div>

@endsection