@extends('layouts.app')
@include('layouts.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-2">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <p class="fs-4 fw-bold" style="color: #03135e">ADD CATEGORY</p>
                    <a href="{{ route('categoryList') }}" class="btn btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('addCategoryProcess')}}" method="POST" id="logForm">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="categoryName" class="form-control @if($errors->has('categoryName')) is-invalid @endif" id="inputCategoryName" placeholder="Example: Survival">
                            <label for="inputCategoryName">Title</label>
                            @if($errors->has('categoryName'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('categoryName') }}
                                </div>
                            @endif
                        </div>
                        <div class="text-center gap-4 mt-4">
                            <button class="btn btn-primary" type="submit">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>