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
        <div class="form_content_area_create_page">

            <div class="create_top_selet_area">
                <!-- custom secelt  -->
                <div class="type_of_product_form_area">
                    <!-- filter sect   -->
                    <div class="banner_single_s_f search_pdt_page_in brand_filter_selct_form_style create_page_top">
                        <p>Type of Product</p>
                        <div class="custom_select_jn">
                            <!-- from w3     -->
                            <form action="{{ route('supplier.product.create') }}">
                                <div class="enter_part_inline_area" style="width:200px;">
                                    <select  class="form-select" name="product_type" id="select-type">
                                        <option value="">Select</option>
                                        <option value="oem" @if (request()->product_type == 'oem') selected @endif>OEM</option>
                                        <option value="aftermarket" @if (request()->product_type == 'aftermarket') selected @endif>Aftermarket</option>
                                    </select>
                                </div>
                            </form>
                            <!-- from w3     -->
                        </div>
                        </div>
                    <!-- filter sect   -->
                </div>
                <!-- custom secelt  -->
            </div>

            @if (request()->has('product_type') && request()->product_type != null)
            <div class="know_part_form_area">
                <div class="know_part_title">
                    <h2>Have Part Number?</h2> 
                </div>
                <div class="enter_partnum_area">
                  
                    <form action="{{ route('supplier.product.create') }}" method="GET">
                        <div class="enter_part_inline_area">
                        <label for="prt_num">Enter Part Number</label>
                        <input type="text" placeholder="17021-321454" class="prt_num" id="prt_num" name="part_number">
                        <button class="go_btn btnn">Go</button>
                        </div>
                        <div class="search_for_port_num_btn_area">
                            <span>Or </span> <button class="btnn serach_f_p_n_btn" name="search_part">Search for Part Number</button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
        </div> 
    </div>
</section>


@endsection

@section('script')
<script type="text/javascript">
var select = document.getElementById('select-type');
select.addEventListener('change', function(){
    this.form.submit();
}, false);
</script>
@endsection