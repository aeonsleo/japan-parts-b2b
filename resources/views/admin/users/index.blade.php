@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Users</h4>
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
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> New User</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    {{-- <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th> --}}
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        {{-- <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td> --}}
                                        <td class="table-user">
                                            {{-- <img src="../assets/images/users/user-4.jpg" alt="table-user"
                                                class="me-2 rounded-circle"> --}}
                                            <a href="javascript:void(0);"
                                                class="text-body fw-semibold">{{ $user->name }}</a>
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->getRoleNames() }}
                                        </td>
                                        <td>
                                            @if ($user->status == 'unverified')
                                            <span class="badge bg-primary">{{ $user->status }}</span>
                                            @elseif ($user->status == 'unapproved')
                                            <span class="badge bg-warning">{{ $user->status }}</span>
                                            @elseif ($user->status == 'banned')
                                            <span class="badge bg-danger">{{ $user->status }}</span>
                                            @elseif ($user->status == 'active')
                                            <span class="badge bg-success">{{ $user->status }}</span>
                                            @elseif ($user->status == 'deactivated')
                                            <span class="badge bg-secondary">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->created_at }}
                                        </td>
                                        <td>
                                            @can('user-list')
                                            <a href="{{ route('users.show', ['user' => $user->id ]) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            @endcan
                                            {{-- @can('user-edit')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                            @endcan
                                            @can('user-delete')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                            @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- <ul class="pagination pagination-rounded justify-content-end mb-0">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </li>
                </ul> --}}

                    {{ $users->links() }}

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
