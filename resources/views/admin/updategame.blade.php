@extends('layouts.app')
@include('layouts.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-2">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <p class="fs-4 fw-bold" style="color: #03135e">UPDATE GAME</p>
                    <a href="{{ route('gameList') }}" class="btn btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('updateGameProcess')}}" method="POST" id="logForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="inputTitle" value="{{ $Games->title }}">
                            <label for="inputTitle">Title</label>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="categoryId" id="categorySelect">
                                <option class="fw-bold" selected value="{{ $Games->categoryId }}">{{ $Games->categories->categoryName }}</option>
                                @foreach ($Category as $category)
                                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>  
                                @endforeach
                            </select>
                            <label for="categorySelect">Category</label>
                            @if($errors->has('categoryId'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('categoryId') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="inputPrice">IDR</span>
                                <input type="text" name="price" class="form-control" id="inputPrice" value="{{ $Games->price }}">
                            </div>
                            @if($errors->has('price'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('price') }}
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="thumbnail" class="form-control @if($errors->has('thumbnail')) is-invalid @endif" id="inputThumb">
                            <label class="input-group-text" for="inputThumb">Thumbnail (460 x 215)</label>
                            @if($errors->has('thumbnail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('thumbnail') }}
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="slide[]" multiple class="form-control @if($errors->has('slide.*') || $errors->has('slide')) is-invalid @endif" id="inputSlider">
                            <label class="input-group-text" for="inputSlider">Slider</label>
                            @if($errors->has('slide.*'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('slide.*') }}
                                </div>
                            @elseif ($errors->has('slide'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('slide') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control fw-light" name="description" placeholder="Leave a description here" id="inputDesc" style="height: 200px">{{ $Games->description }}</textarea>
                            <label for="inputDesc">Description</label>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <input type="hidden" name="gameId" value="{{ $Games->id }}">
                        <div class="text-center gap-4 mt-4">
                            <button class="btn btn-primary" type="submit">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>