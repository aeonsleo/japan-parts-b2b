@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Create Product</h5>
                @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
                @endif
                <form action="{{ route('supplier.product.store-oem') }}" class="product-form p-3" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 pl-3">
                            <div class="row">
                                <div class="col-3">
                                    <label for="product_type" class="col-form-label">Type</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label">OEM</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="width" class="col-form-label">Brand</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <select name="brand_name" id="brand" class="form-control form-select @error('brand_name') is-invalid @enderror">
                                            <option value="">Select</option>
                                            <option value="audi" @if (request()->brand_name == 'audi') selected @endif>Audi</option>
                                            <option value="bmw" @if (request()->brand_name == 'bmw') selected @endif>BMW</option>
                                            <option value="hyundai" @if (request()->brand_name == 'hyundai') selected @endif>Hyundai</option>
                                            <option value="toyota" @if (request()->brand_name == 'toyota') selected @endif>Toyota</option>
                                        </select>
                                        @error('brand_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                          
                                    </div>
                                </div>
                            </div>   
                        </div>                        
                    </div>
                    @if (!request()->has('part_number'))
                    <div class="row">
                        <div class="col-12">
                            <div id="parts-catalog" data-key="TWS-D76AA7C1-D8E3-4E92-8B54-9DA7DF901B81" 
                                data-back-url="/supplier/products/oem/create?part_number={article}&brand_name={brand}&lang=en"></div>
                            <script type="application/javascript" src="https://gui.parts-catalogs.com/v2/parts-catalogs.js"></script>                        
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3 align-middle">
                                    <label for="part-number" class="col-form-label">Part Number*</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="part_number" class="form-control" value="{{ old('part_number') ?: request()->part_number }}">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="part-name" class="col-form-label">Part Name*</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="part_name" class="form-control @error('part_name') is-invalid @enderror" value="{{ old('part_name') }}">
                                        @error('part_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                        
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="weight" class="col-form-label">Weight</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="weight" class="form-control" value="{{ old('weight') }}">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="height" class="col-form-label">Height</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="height" class="form-control" value="{{ old('height') }}">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="length" class="col-form-label">Length</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="length" class="form-control" value="{{ old('length') }}">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="width" class="col-form-label">Width</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="width" class="form-control" value="{{ old('width') }}">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="width" class="col-form-label">Product Image</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="file" name="width" class="form-control" value="{{ old('image') }}">
                                    </div>
                                </div>
                            </div>   
                        </div> 
                        <div class="col-6"></div>   
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <label for="width" class="col-form-label">Product Description</label>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <textarea name="description" class="form-control" rows="6">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>   
                        </div>  
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="min_order_quantity" class="col-form-label">Min Order Qty*</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="min_order_quantity" class="form-control @error('min_order_quantity') is-invalid @enderror" value="{{ old('min_order_quantity') }}">
                                        @error('min_order_quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                           
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-3">
                                    <label for="country_id" class="col-form-label">Country of Origin*</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <select name="country_id" id="country_id" class="form-control @error('country_id') is-invalid @enderror">
                                            <option value="">Select</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" @if($country->id == old('country_id')) selected @endif>{{ $country->country_name }}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror  
                                    </div>
                                </div>
                            </div>   
 
                            <div class="row">
                                <div class="col-3">
                                    <label for="unit_price" class="col-form-label">Unit Price*</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="unit_price" class="form-control @error('unit_price') is-invalid @enderror"" value="{{ old('unit_price') }}">
                                        @error('unit_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                          
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-3">
                                    <label for="lead_time" class="col-form-label">Delivery Lead Time</label>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" name="lead_time" class="form-control" value="{{ old('lead_time') }}">
                                        <span class="input-group-text" id="basic-addon2">Days</span>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-2 mb-2 mt-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="is_new" value="1" checked>
                                        <label class="form-check-label" for="radio1">New</label>
                                    </div>
                                </div>
                                <div class="col-2 mb-2 mt-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="is_new" value="1" >
                                        <label class="form-check-label" for="radio1">Used</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="in_stock" name="in_stock" value="1" >
                                        <label class="form-check-label" for="in_stock">In Stock</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <label for="max_order_quantity" class="col-form-label">Max Order Qty</label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="text" name="max_order_quantity" class="form-control @error('max_order_quantity') is-invalid @enderror"" value="{{ old('max_order_quantity') }}">
                                        @error('max_order_quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                           
                                    </div>
                                </div>
                            </div>
                            <div id="slabs">
                                <price-slab></price-slab>
                                @error('input_price')
                                <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror   
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
$(document).ready(function() {
    if($('#slabs').length) {
        const app = new Vue({
            el: '#slabs',
        });
    }

});

</script>

@endsection