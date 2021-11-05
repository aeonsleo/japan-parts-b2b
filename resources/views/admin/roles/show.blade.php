@extends('layouts.admin.admin')

@section('title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Show Role</li>
                    </ol>
                </div>
                <h4 class="page-title">Role</h4>
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
                <div class="mb-3">
                    <h4>Name: {{ $role->name }}</h4>
                </div>
                <div class="mb-3">
                    <h4 class="mb-3">Permissions</h4>
                    <div class="row">
                        @foreach ($rolePermissions as $permission)
                            <div class="col-2">
                                <p class="font-16">{{ $permission->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3">
                    <h4 class="mb-2">Users</h4>
                    @foreach ($role->users as $user)
                        <p class="font-16">{{ $user->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
