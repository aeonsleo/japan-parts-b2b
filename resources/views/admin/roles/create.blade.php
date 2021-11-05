@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Create Role</li>                        
                    </ol>
                </div>
                <h4 class="page-title">Create a Role</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection

@section('content')


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('roles.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
                    </div>

                            <div class="mb-3">
                                <h4 class="form-label">Permission</h4>
                                @foreach($permission as $value)
                                <div class="form-check">
                                    <input type="checkbox" id="permcheck-{{ $value->id }}" value="{{ $value->id }}" class="" name="permission[]">
                                    <label class="form-check-label" for="permcheck-{{ $value->id }}">{{ $value->name }}</label>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection