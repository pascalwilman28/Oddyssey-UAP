@extends('layouts.app')
@section('title','Login')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                {{-- Failed Auth --}}
                @if(session('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('fail')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/logo/logo_tr.png') }}" alt="Logo" width="100" height="100">
                    </div>
                    <p class="fs-1 text-center fw-bold" style="color: #03135e">ODDSSEY</p>
                </div>
                <div class="card-body">
                    <form action="{{url('auth_login')}}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            {{-- {{ Failed Login }} --}}
                            @error('login_failed')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong><br> {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <label class="fs-6 mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="text" placeholder="Input Your Email"/>
                            @if($errors->has('email'))
                                <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label class="fs-6 mb-1" for="inputPassword">Password</label>
                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Input Your Password"/>
                            @if($errors->has('password'))
                                <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="rememberPasswordCheck" name="remember" type="checkbox"/>
                                <label class="custom-control-label" for="rememberPasswordCheck">Remember Me</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-4 mx-auto mt-4">
                            <button class="btn btn-primary" type="submit">LOG IN</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a class="text-muted" href="{{route('home')}}">Home</a>
                        | 
                        <a class="text-muted" href="{{url('register')}}">Don't have an account? Register now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
      