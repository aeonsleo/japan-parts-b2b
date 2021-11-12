@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Category Field Option</a></li>
                        <li class="breadcrumb-item active">Create category field option</li>                        
                    </ol>
                </div>
                <h4 class="page-title">Create Category Field Option</h4>
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
                <form action="{{ route('category-field-options.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_field_id" class="form-control">
                            @foreach ($categoryFields as $categoryField)
                            <option value="{{ $categoryField->id }}">{{ $categoryField->name }}</option>
                            @endforeach
                        </select>
                            
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection