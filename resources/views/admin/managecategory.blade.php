@extends('layouts.app')
@section('title','Manage Game')
@include('layouts.navbar')
@section('content')

<div class="container">
    <div class="p-4 text-center">
        <a href="{{ route('addCategory') }}" class="btn btn-dark">ADD NEW CATEGORY</a>
    </div>
    <div>
         {{-- Session Message --}}
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="required-field">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @forelse ($Categories as $category)
            <div class="card mb-12 shadow-sm mb-1 bg-white rounded">
                <div class="d-flex align-items-center justify-content-sm-between">
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->categoryName }}</h5>
                            <p class="card-text"><small class="text-muted">last updated at {{ $category->updated_at }}</small></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="/admin/updatecategory/{{ encrypt($category->id) }}" class="btn btn-primary mx-2">UPDATE</a>
                                <a href="/admin/deletecategory/{{ encrypt($category->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete Category {{ $category->categoryName }}?');">DELETE</a>
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
          Showing Page {{ $Categories->currentPage() }} | Per Page {{ $Categories->perPage() }} of {{ $Categories->total() }}
        </div>
        <div class="pagination">
          {{$Categories->appends($_GET)->links()}} 
        </div>
    </div>
</div>
<br>
@endsection