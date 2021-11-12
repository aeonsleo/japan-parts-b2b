@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>                        
                    </ol>
                </div>
                <h4 class="page-title">Edit Category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.update', ['category' => $category->id ]) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert"> 
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10">{{ $category->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection