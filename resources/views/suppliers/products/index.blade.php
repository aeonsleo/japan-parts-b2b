@extends('layouts.app')

@section('content')
<section class="order_page_need_help_section big_section_cmn create_page_page_title">
    <div class="container-fluid">
        <div class="title_and_help_area create_page_title_and_btn_area">
            <!-- end bread cump global   -->
            <!-- page title  -->
            <div class="cart_page_title_area">
                <h2>Products</h2>
            </div>

        </div>
    </div>
</section>

<section class="create_page_form_section big_section_cmn">
    <div class="container-fluid">
        <div class="">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif   

            <div>
                <table class="table table-striped">
                    <thead>
                        <th>S no.</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Part No</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Country</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ $product->main_image ? asset($product->main_image->filepath) : '' }}" alt="" height="80"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->part_number }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->type }}</td>
                                <td>{{ $product->unit_price }}</td>
                                <td>{{ $product->country->country_name }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('supplier.product.edit', ['id' => $product->id]) }}" >Edit</a>
                                    
                                    <form action="{{ route('supplier.product.delete', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-default" onclick="return confirmDelete()">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $products->links() }}
            </div>
        </div>
    </div>
</section>




@endsection

@section('script')
<script>
    function confirmDelete() {
        if(confirm('Are you sure you want to delete the product ?')) {
            return true;
        }
        else {
            return false;
        }
    }
</script>
@endsection