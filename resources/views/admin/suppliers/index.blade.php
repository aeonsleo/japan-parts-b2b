@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Suppliers</li>
                    </ol>
                </div>
                <h4 class="page-title">Suppliers</h4>
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
                                    <th>Company Name</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        {{-- <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td> --}}
                                        <td class="table-supplier">
                                            {{-- <img src="../assets/images/users/supplier-4.jpg" alt="table-supplier"
                                                class="me-2 rounded-circle"> --}}
                                            <a href="javascript:void(0);"
                                                class="text-body fw-semibold">{{ $supplier->user->name }}</a>
                                        </td>
                                        <td>
                                            {{ $supplier->user->email }}
                                        </td>
                                        <td>
                                            {{ $supplier->company_name }}
                                        </td>
                                        <td>
                                            {{ $supplier->phone }}
                                        </td>                                        
                                        <td>
                                            {{-- {{ dd($supplier->getRoleNames()->all() )}} --}}
                                            {{ implode(',', $supplier->user->getRoleNames()->all()) }}
                                        </td>
                                        <td>
                                            @if ($supplier->user->status == 'verified')
                                            <span class="badge bg-primary">{{ $supplier->user->status }}</span>
                                            @elseif ($supplier->user->status == 'unverified')
                                            <span class="badge bg-warning">{{ $supplier->user->status }}</span>
                                            @elseif ($supplier->user->status == 'unapproved')
                                            <span class="badge bg-warning">{{ $supplier->user->status }}</span>
                                            @elseif ($supplier->user->status == 'banned')
                                            <span class="badge bg-danger">{{ $supplier->user->status }}</span>
                                            @elseif ($supplier->user->status == 'active')
                                            <span class="badge bg-success">{{ $supplier->user->status }}</span>
                                            @elseif ($supplier->user->status == 'deactivated')
                                            <span class="badge bg-secondary">{{ $supplier->user->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $supplier->created_at }}
                                        </td>
                                        <td>
                                            @can('supplier-list')
                                            <a href="{{ route('suppliers.show', ['supplier' => $supplier->id ]) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            @endcan
                                            {{-- @can('supplier-edit')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                            @endcan
                                            @can('supplier-delete')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                            @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- {{ $users->links() }} --}}

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
