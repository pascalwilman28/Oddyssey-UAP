@extends('layouts.app')

@include('layouts.navbar')

<div class="container">
    <p class="fs-4 font-weight-bold mt-4">Your Cart</p>

    {{-- Session Message --}}
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="required-field">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif

    <div class="card mb-12 shadow-sm p-2 bg-white rounded">
        @forelse ($cartList as $cart)
            <div class="card mb-12 bg-white rounded">
                <div class="d-flex align-items-center justify-content-sm-between">
                    <div class="col-md-2">
                        <a href="/game/{{ encrypt($cart->gamedetail->id) }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('storage/'.$cart->gamedetail->game_image.'header.jpg') }}" class="img-fluid rounded-start" alt="...">
                        </a>   
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cart->gamedetail->title }}</h5>
                            <p class="card-text"><small class="text-muted">{{ $cart->gamedetail->categories->categoryName }}</small></p>
                        </div>
                    </div>
                        
                    <div class="col-md-2">
                        <div class="card-body">
                            <h5 class="text-end">
                                @if ($cart->gamedetail->price == 0)
                                    FREE
                                @else
                                    @indonesian($cart->gamedetail->price)
                                @endif
                            </h5>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="cart/{{encrypt($cart->id)}}" class="btn btn-xs btn-danger fw-normal" onclick="return confirm('Are you sure to delete game {{ $cart->gamedetail->title }}');">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card col-12 text-center fs-6 mt-4 p-2">
                Empty Cart(s)
            </div>
        @endforelse
        <div class="card mb-12 mb-2 bg-white rounded">
            <div class="d-flex align-items-center justify-content-sm-between">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text"><small class="text-muted">{{ $cartCount }} game(s)</small></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body">
                        <h5 class="text-end">
                            @if ($cartCount == 0)
                                @indonesian($totalPrice)
                            @elseif ($totalPrice == 0 && $cartCount > 0)
                                FREE
                            @else
                                @indonesian($totalPrice)
                            @endif
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ url('checkout') }}" method="post">
        @csrf
        <div class="d-grid d-md-flex p-3 justify-content-end">
            @if ($cartCount > 0)
                <button type="submit" class="btn btn-primary fw-bold" onclick="return confirm('Before checkout, make sure your cart is the way you want it. Want to checkout now?');">CHECKOUT</button>
            @else
                <button type="button" class="btn btn-primary fw-bold" onclick="return alert('Your Cart is empty, buy game now!');">CHECKOUT</button>
            @endif
        </div>
    </form>
</div>