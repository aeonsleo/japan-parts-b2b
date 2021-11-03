@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h3>Users Management</h3>
    <div class="pull-right">
      <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
    </div>
  </div>
</div>

@endsection