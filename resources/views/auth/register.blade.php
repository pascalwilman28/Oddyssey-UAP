@extends('layouts.app')
@section('title','Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                {{-- Error Alert --}}
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/logo/logo_tr.png') }}" alt="Logo" width="100" height="100">
                    </div>
                    <p class="fs-1 text-center fw-bold" style="color: #03135e">ODDSSEY</p>
                </div>
                <div class="card-body">
                    <form action="{{url('register_process')}}" method="POST" id="logForm">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="fs-6 mb-1" for="inputName">Name</label>
                            <input class="form-control" id="inputName" type="text" name="name" placeholder="Input Your Name"/>
                            @if($errors->has('name'))
                                <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-2">
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
                        <div class="form-group mb-2">
                            <label class="fs-6 mb-1" for="inputCPassword">Confirm Password</label>
                            <input class="form-control" id="inputCPassword" type="password" name="confirm_password" placeholder="Confirm Your Password"/>
                            @if($errors->has('confirm_password'))
                                <span class="badge rounded-pill bg-warning text-dark">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end align-items-center gap-4 mt-4">
                            <a class="text-muted" href="{{url('login')}}">Already Registered?</a>
                            <button class="btn btn-primary" type="submit">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection