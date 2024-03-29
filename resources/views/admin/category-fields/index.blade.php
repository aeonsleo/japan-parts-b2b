@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Category Fields</li>
                    </ol>
                </div>
                <h4 class="page-title">Category Fields</h4>
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
                            <a type="button" href="{{ route('category-fields.create') }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> New Category Field</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @if ($categoryFields->count())
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryFields as $categoryField)
                                    <tr>
                                        <td class="table-categories">
                                            <a href="javascript:void(0);"
                                                class="text-body fw-semibold">{{ $categoryField->name }}</a>
                                        </td>
                                        <td>
                                           {{ $categoryField->category->name }}
                                        </td>
                                        <td>
                                            {{-- @can('category-field-list')
                                            <a href="{{ route('category-fields.show', ['categoryField' => $categoryField->id ]) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            @endcan --}}
                                            @can('category-field-edit')
                                            <a href="{{ route('category-fields.edit', ['category_field' => $categoryField->id])}}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                            @endcan
                                            {{--
                                            @can('category-field-delete')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                            @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>No Category Field created</h4>
                        @endif
                    </div>
                    {{ $categoryFields->links() }}
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
