@extends('layouts.app')
@section('title','Game')
@section('content')

@include('layouts.navbar')

<div class="container mt-4 mb-4">

    {{-- Session Message --}}
    @if(session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="required-field">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif

    {{-- Review Success --}}
    @if(session()->has('reviewsuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="required-field">
            <strong>{{ session()->get('reviewsuccess') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif

    {{-- Game Detail --}}
    <div class="row">
        {{-- Game Preview --}}
        <div class="col-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/'.$game->game_image.'header.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->title }}</h5>
                    <p class="text-muted card-text truncate-text">
                        {{ $game->description }}</p>
                    <div class="d-flex justify-content-between">
                        <p class="card-text fs-5 fw-bold">
                            @if ($game->price == 0)
                                FREE
                            @else
                                @indonesian($game->price)
                            @endif
                        </p>
                        <form action="{{ url('addcart') }}" method="post">
                            @csrf
                            <input type="hidden" name="gameId" value="{{ $game->id }}">
                            @if (session()->has('user_session'))
                                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                            @endif
                            <button type="submit" class="btn btn-dark align-center fw-bold">ADD TO CART</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Game Slider --}}
        <div class="col-8">
            <div class="card shadow-sm">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/'.$game->game_image.'img_1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/'.$game->game_image.'img_2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/'.$game->game_image.'img_3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Description Game --}}
    <div class="row row-cols-2 row-cols-md-3 mt-4 g-0 shadow-sm">
        <div class="col">
            <div class="card card-body">
                <div class="text-muted">Genre</div>
                <p class="fs-5 fw-bold">{{ $game->categories->categoryName }}</p>
            </div>
        </div>
        <div class="col">
            <div class="card card-body">
                <div class="text-muted">Release Date</div>
                <p class="fs-5 fw-bold">{{ $game->created_at }}</p>
            </div>
        </div>
        <div class="col">
            <div class="card card-body">
                <div class="text-center mb-2">All Reviews</div>
                <div class="d-flex justify-content-around">
                    <div class="btn btn-success position-relative">
                        Recommended
                        <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-success">
                        {{ $Recommended }}</span>
                    </div>
                    <div class="btn btn-danger position-relative">
                        Not Recommended
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $NotRecommended }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    {{-- More Like This --}}
    <p class="fs-6 fw-normal mt-4">More like this</p>
    <div class="row row-cols-1 row-cols-md-3 g-2">
        @if ($moreGames->isEmpty())
            <div class="card col-12 text-center fs-6 mb-4 p-2">
                Sorry, Data not Provided!
            </div>
        @else
            @foreach ($moreGames as $mGames)
                <a href="/game/{{ encrypt($mGames->id) }}" class="text-decoration-none text-dark">
                    <div class="col">
                        <img src="{{ asset('storage/'.$mGames->game_image.'header.jpg') }}" class="img-fluid" alt="...">
                        <p class="fs-5 text-end">
                            @if ($mGames->price == 0)
                                FREE
                            @else
                                @indonesian($mGames->price)
                            @endif
                        </p>
                    </div>
                </a>   
            @endforeach
        @endif
    </div>

    {{-- Review Form --}}
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Leave a Review!</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('addreview') }}" method="post">
                @csrf
                <input type="hidden" name="gameId" value="{{ $game->id }}">
                @if (session()->has('user_session'))
                    <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                @endif
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="review" id="recommended" value="1">
                    <label class="form-check-label" for="recommended">Recommended</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="review" id="notrecommended" value="0">
                    <label class="form-check-label" for="notrecommended">Not Recommended</label>
                </div>
                @if($errors->has('review'))
                    <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('review') }}</span>
                @endif

                <div class="form-floating mt-2">
                    <textarea class="form-control" name="descReview" placeholder="Leave a review here" id="review" style="height: 100px"></textarea>
                    <label for="review">Review</label>
                    @if($errors->has('descReview'))
                    <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('descReview') }}</span>
                @endif
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-dark fw-bold">POST</button>
                </div>
          </form>
        </div>
    </div>

    {{-- Review Result --}}
    <div class="row row-cols-1 row-cols-md-3 g-2 mt-4">
        @foreach ($Review as $review)
        <div class="col">
            <div class="card h-100 shadow-sm bg-white rounded">
                <div class="card-header">
                    {{ $review->userdetail->name }}
                </div>
                <div class="d-inline-flex card-body">
                    @if ($review->review == 1)
                        <img src="{{ asset('storage/review/thumbs_up.png') }}" class="rounded-circle" width="30" height="30" alt="">
                        <h6 class="card-title"> &nbsp; Recommended</h6>
                    @else
                        <img src="{{ asset('storage/review/thumbs_down.png') }}" class="rounded-circle" width="30" height="30" alt="">
                        <h6 class="card-title"> &nbsp; Not Recommended</h6>
                    @endif
                </div>
                <div class="card-body">
                    {{ $review->descReview }}
                </div>
            </div>
        </div>   
        @endforeach
    </div>
</div>
<br>
@endsection