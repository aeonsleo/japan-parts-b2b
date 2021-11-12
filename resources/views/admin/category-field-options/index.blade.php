@extends('layouts.admin.admin')

@section('title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Category Field Options</li>
                    </ol>
                </div>
                <h4 class="page-title">Category Field Options</h4>
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
                            <a type="button" href="{{ route('category-field-options.create') }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> New Category Field Option</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @if ($categoryFieldOptions->count())
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>CategoryField</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryFieldOptions as $categoryFieldOption)
                                    <tr>
                                        <td class="table-categories">
                                            <a href="javascript:void(0);"
                                                class="text-body fw-semibold">{{ $categoryFieldOption->name }}</a>
                                        </td>
                                        <td>
                                           {{ $categoryFieldOption->categoryField->name }}
                                        </td>
                                        <td>
                                            {{-- @can('category-field-options-list')
                                            <a href="{{ route('category-fields.show', ['categoryField' => $categoryField->id ]) }}" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                            @endcan --}}
                                            @can('category-field-options-edit')
                                            <a href="{{ route('category-field-options.edit', ['category_field_option' => $categoryFieldOption->id])}}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                            @endcan
                                            {{--
                                            @can('category-field-options-delete')
                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                            @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>No Category Field Option created</h4>
                        @endif
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection
