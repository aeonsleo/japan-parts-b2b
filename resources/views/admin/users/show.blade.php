@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
                <h4 class="page-title">User Details</h4>
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
                    {{-- <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image"> --}}
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-2">{{ $user->name }}</h4>
                            @if($user->status == 'banned')
                            <p class="text-danger">User is banned</p>
                            @endif
                        </div>
                        <div class="col-4">
                            @if ($user->status == 'active')
                            <form action="{{ route('user.deactivate', ['id' => $user->id]) }}" method="POST" class="float-end ms-2">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-xs waves-effect mb-2 waves-light">Deactivate</button>
                            </form>
                            <form action="{{ route('user.ban', ['id' => $user->id]) }}" method="POST" class="float-end ms-2">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Ban</button>
                            </form>
                            @elseif ($user->status == 'deactivated')
                            <form action="{{ route('user.activate', ['id' => $user->id]) }}" method="POST" class="float-end ms-2">
                                @csrf
                                <button type="submit" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Activate</button>
                            </form>
                            @elseif ($user->status == 'unapproved')
                            <form action="{{ route('user.approve', ['id' => $user->id]) }}" method="POST" class="float-end ms-2">
                                @csrf
                                <button type="submit" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Approve</button>
                            </form>
                            @endif
                            @if ($user->status == 'banned')
                            <form action="{{ route('user.approve', ['id' => $user->id]) }}" method="POST" class="float-end ms-2">
                                @csrf
                                <button type="submit" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Revoke Ban</button>
                            </form>
                            @else
                            @endif
                        </div>
                    </div>


                    <div class="text-start mt-3">
                        <h4 class="font-13 text-uppercase">Details:</h4>
                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $user->name }}</span></p>
                    
                        {{-- <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{  }}</span></p> --}}
                    
                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $user->email }}</span></p>
                        <p class="text-muted mb-2 font-13"><strong>Status :</strong> <span class="ms-2">{{ $user->status }}</span></p>
                        <p class="text-muted mb-1 font-13"><strong>Created :</strong> <span class="ms-2">{{ $user->created_at }}</span></p>
                    </div>                                    
                </div>  
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
