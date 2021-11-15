@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
                <h4 class="page-title">Categories</h4>
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
                            <a type="button" href="{{ route('categories.create') }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> New Category</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @if ($categories->count())
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Active</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="table-categories">
                                            <a href="javascript:void(0);"
                                                class="text-body fw-semibold">{{ $category->name }}</a>
                                        </td>
                                        <td>
                                            {{ Str::limit($category->description, 20) }}
                                        </td>
                                        <td>
                                            @if ($category->active == 1)
                                            <span class="badge bg-primary">Active</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @can('category-list')
                                            <a href="{{ route('categories.show', ['category' => $category->id ]) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            @endcan
                                            @can('category-edit')
                                            <a href="{{ route('categories.edit', ['category' => $category->id])}}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                            @endcan
                                            {{-- @can('category-delete')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                            @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>No Categories created</h4>
                        @endif
                    </div>
                    {{ $categories->links() }}
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
