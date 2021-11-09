@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Roles</li>
                    </ol>
                </div>
                <h4 class="page-title">Roles</h4>
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
                            <a type="button" class="btn btn-danger waves-effect waves-light"
                                href="{{ route('roles.create') }}"><i class="mdi mdi-plus-circle me-1"></i> New Role</a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        {{-- <td>
                                    @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                    @endcan
                                    @can('role-delete')
                                    <form action="{{ route('roles.destroy', ['role' => $role->id]) }}" method="DELETE" style="display: inline"></form>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    @endcan
                                </td> --}}
                                        <td>
                                            <a href="{{ route('roles.show', ['role' => $role->id]) }}"
                                                class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            @can('role-edit')
                                                    <a href="{{ route('roles.edit', ['role' => $role->id]) }}"
                                                        class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            @endif
                                            @can('role-delete')
                                                    {{-- <a href="javascript:void(0);" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a> --}}
                                                    <form action="{{ route('roles.destroy', ['role' => $role->id]) }}"
                                                        method="POST" style="display: inline"
                                                        onsubmit="return confirmDelete('{{ $role->name }}')">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="action-icon delete-icon"> <i
                                                                class="mdi mdi-delete"></i></button>
                                                    </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection

@section('script')

    <script>
        function confirmDelete(name) {
            var answer = window.confirm('Are you sure you want to delete ' + name + '?');
            if (answer) {
                return true;
            } else {
                return false;
            }
        }
    </script>

@endsection
