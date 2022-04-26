@extends('layouts.app')

@section('content')
<section class="order_page_need_help_section big_section_cmn create_page_page_title">
    <div class="container-fluid">
        <div class="title_and_help_area create_page_title_and_btn_area">
            <!-- end bread cump global   -->
            <!-- page title  -->
            <div class="cart_page_title_area">
                <h2>Create Product</h2>
            </div>

        </div>
    </div>
</section>

<section class="create_page_form_section big_section_cmn">
    <div class="container-fluid">
        <div class="form_content_area_create_page1">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif   

            <!--big form area -->
            <div class="big_from_area">
                <div class="big_from_start">

                    {{-- If user doesn't have the part number then show the parts catalog --}}
                    @if (!request()->has('part_number'))
                    <div class="row">
                        <div class="col-12">
                            <div id="parts-catalog" data-key="TWS-D76AA7C1-D8E3-4E92-8B54-9DA7DF901B81" 
                                data-back-url="/supplier/products/oem/create?part_number={article}&brand_name={brand}&lang=en"></div>
                            <script type="application/javascript" src="https://gui.parts-catalogs.com/v2/parts-catalogs.js"></script>                        
                        </div>
                    </div>
                    @else
                    
                    <form action="{{ route('supplier.product.store-oem') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- end top select  -->
                        <div class="create_top_selet_area">
                            <!-- custom secelt  -->
                            <div class="type_of_product_form_area">
                                <!-- filter sect   -->
                                <div
                                    class="banner_single_s_f search_pdt_page_in brand_filter_selct_form_style create_page_top">
                                    <p>Type of Product</p>
                                    <div class="custom_select_jn">
                                        <!-- from w3     -->
                                        <div class="custom-select" style="width:200px;">
                                            <select name="type">
                                                <option value="oem">OEM Product</option>
                                            </select>
                                        </div>
                                        <!-- from w3     -->
                                    </div>
                                </div>
                                <!-- filter sect   -->
                            </div>
                            <!-- custom secelt  -->
                        </div>
                        <!-- end top select  -->

                        <!-- big_form_half area  -->
                        <div class="big_form_half_area">
                            <!-- left_half -->
                            <div class="big_half big_half_left">
                                <!-- single_form area select area   -->
                                <div class="enter_part_inline_area single_big_form">
                                    <!-- select  -->
                                    <!-- filter sect   -->
                                    <div
                                        class="banner_single_s_f search_pdt_page_in brand_filter_selct_form_style create_page_top">
                                        <p class="slect_lebel">Brand</p>
                                        <div class="custom_select_jn">
                                            <!-- from w3     -->
                                            <div class="custom-select" style="width:200px;">
                                                <select name="brand_name" class="form-control @error('brand_name') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                    <option value="audi" @if (request()->brand_name == 'audi') selected @endif>Audi</option>
                                                    <option value="bmw" @if (request()->brand_name == 'bmw') selected @endif>BMW</option>
                                                    <option value="hyundai" @if (request()->brand_name == 'hyundai') selected @endif>Hyundai</option>
                                                    <option value="toyota" @if (request()->brand_name == 'toyota') selected @endif>Toyota</option>
                                                </select>
                                            </div>
                                            <!-- from w3     -->
                                        </div>
                                    </div>
                                    <!-- filter sect   -->
                                    <!-- select  -->
                                </div>
                                <!-- single_form area end slect area   -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Part Number</label>
                                    <input name="part_number" type="text" placeholder="17021-321454" value="{{ old('part_number') ?: request()->part_number }}"
                                        class="prt_num form-control @error('part_number') is-invalid @enderror">
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Weight</label>
                                    <input name="weight" type="text" placeholder="Input Weight" class="prt_num form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}">
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Height</label>
                                    <input name="height" type="text" placeholder="Input Height" class="prt_num form-control @error('height') is-invalid @enderror" value="{{ old('height') }}">
                                </div>
                                <!-- single_form area  -->

                            </div>
                            <!-- left half  -->
                            <!-- right_half -->
                            <div class="big_half big_half_right">
                                
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Part Name</label>
                                    <input name="part_name" type="text" placeholder="17021-321454" class="prt_num form-control @error('part_name') is-invalid @enderror" value="{{ old('part_name') }}">
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Length</label>
                                    <input name="length" type="text" placeholder="17021-321454" class="prt_num form-control @error('length') is-invalid @enderror" value="{{ old('length') }}">
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="prt_num">Width</label>
                                    <input name="width" type="text" placeholder="17021-321454" class="prt_num form-control @error('width') is-invalid @enderror" value="{{ old('width') }}">
                                </div>
                                <!-- single_form area  -->
                            </div>
                            <!-- right half  -->
                        </div>
                        <!-- big_form_half area end  end first area  -->
                        <!-- big_form_half area end  3rd area  -->
                        <div class="big_form_half_area thread_area_form">
                            <div class="big_half full_width">
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form product_iamages_area">
                                    <label for="product_iamages">Add Product Images</label>
                                    <input type="file" name="images[]" placeholder="Upload Multiple Images"
                                        class="" id="product_iamages" multiple>
                                    @error('images')
                                        
                                    @enderror
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form product_description_area">
                                    <label for="product_description">Product Description</label>
                                    <textarea name="product_description" id="product_description"
                                        placeholder="Input Product Description"></textarea>
                                </div>
                                <!-- single_form area  -->

                            </div>

                        </div>
                        <!-- big_form_half area end  3rd area  -->
                        <!-- big_form_half area start Min MOQ.  -->
                        <div class="big_form_half_area min_moq_area">

                            <!-- left_half -->
                            <div class="big_half big_half_left">
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="min_mq">Min MOQ.</label>
                                    <input type="text" placeholder="Input Min MOQ." class="min_mq prt_num form-control @error('min_order_quantity') is-invalid @enderror" 
                                        id="min_mq" value="{{ old('min_order_quantity') }}" name="min_order_quantity">
                                </div>
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form unit_price_area">
                                    <label for="unit_price">Unit Price</label>
                                    <input name="unit_price" type="text" placeholder="Input Product Price" class="unit_price form-control @error('unit_price') is-invalid @enderror"
                                        id="unit_price" value="{{ old('unit_price') }}">
                                </div>
                                <!-- single_form area  -->
                                <!-- single_form area  -->

                                <div class="enter_part_inline_area single_big_form lead_time_area">
                                    <label for="lead_time">Delivery Lead
                                        Time</label>
                                    <input type="text" name="lead_time" placeholder="Input Lead Time" class="lead_time form-control @error('lead_time') is-invalid @enderror"
                                        id="lead_time" value="{{ old('lead_time') }}">
                                </div>
                                <!-- single_form area select area   -->
                                <div class="enter_part_inline_area single_big_form  check_box_area">
                                    <div class="single_check_box">
                                        <input type="radio" class="" id="radio1" name="is_new" value="1" checked>
                                        <label class="form-check-label" for="radio1"> New</label>
                                    </div>
                                    <div class="single_check_box">
                                        <input type="radio" class="" id="radio1" name="is_new" value="0">
                                        <label class="form-check-label" for="radio1"> Used</label>
                                    </div>
                                </div>
                                <div class="enter_part_inline_area single_big_form  check_box_area">
                                    <div class="single_check_box">
                                        <label for="In-stock">In-stock</label>
                                        <input type="checkbox" id="In-stock" name="In-stock" value="Boat">
                                    </div>
                                </div>

                                <!-- single_form area select area   -->
                                <div class="enter_part_inline_area single_big_form">
                                    <!-- select  -->
                                    <!-- filter sect   -->
                                    <div
                                        class="banner_single_s_f search_pdt_page_in brand_filter_selct_form_style create_page_top">
                                        <p class="slect_lebel">Country of Origin</p>
                                        <div class="custom_select_jn">
                                            <!-- from w3     -->
                                            <div class="custom-select" style="width:200px;">
                                                <select name="country_id">
                                                    <option value="">Choose Origin Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- from w3     -->
                                        </div>
                                    </div>
                                    <!-- filter sect   -->
                                    <!-- select  -->
                                </div>
                                <!-- single_form area end slect area   -->
                            </div>
                            <!-- left half  -->
                            <!-- right_half -->
                            <div id="slabs" class="big_half big_half_right  select_form_big_cmn big_half_upda_fin">
                                <!-- single_form area select area   -->
                                <!-- single_form area  -->
                                <div class="enter_part_inline_area single_big_form">
                                    <label for="max_moq">Max MOQ.</label>
                                    <input name="max_order_quantity" type="text" placeholder="Input Max MOQ." class="max_moq" id="max_moq" value="{{ old('max_order_quantity') }}">
                                </div>

                                <price-slab></price-slab>
                                @error('input_price')
                                <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror  
                            </div>
                            <!-- right half  -->
                        </div>
                        <!-- big_form_half area end  2nd area  -->
                        <div class="submit_btn_area">
                            <button class="btnn big_form_submit_btn">Add Product</button>
                        </div>

                    </form>
                    @endif
                </div>
            </div>
            <!-- big form area end  -->

        </div>
    </div>
</section>




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