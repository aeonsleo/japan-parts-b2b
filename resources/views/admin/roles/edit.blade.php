@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Edit Role</li>                        
                    </ol>
                </div>
                <h4 class="page-title">Edit Role</h4>
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
                <form action="{{ route('roles.update', ['role' => $role->id]) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        {{ method_field('PATCH') }}
                        <label class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') ?: $role->name }}">
                    </div>

                            <div class="mb-3">
                                <h4 class="form-label">Permission</h4>
                                <div class="row">
                                    @foreach($permission as $value)
                                    <div class="col-3">
                                        <div class="form-check font-16">
                                            <input type="checkbox" id="permcheck-{{ $value->id }}" value="{{ $value->id }}" class="" name="permission[]"
                                                @if(in_array($value->id, $rolePermissions)) 
                                                checked
                                                @endif
                                            >
                                            <label class="form-check-label" for="permcheck-{{ $value->id }}">{{ $value->name }}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection