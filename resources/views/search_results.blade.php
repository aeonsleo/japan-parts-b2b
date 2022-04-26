@extends('layouts.app')

@section('content')
    @include('partials.header')
    @include('partials.search_form')
    
    <section class="product_section_with_filter big_section_cmn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('partials.search_filter')
                </div>
                <div class="col-lg-10">
                    <!-- product-area   -->
                    <!-- search_result area  -->
                    <div class="search_result_area">
                        <div class="search_result_content">
                            <div class="top_p_s">Search result for,</div>
                            @if (isset($partName))
                            <h2>{{ $partName }}</h2>
                            @endif
                            @if (isset($partNumber))
                            <div class="bottom_p">Part No. {{ $partNumber }}</div>
                            @endif
                        </div>
                    </div>
                    <!-- search result area  -->
                    <!-- Showing 12 results  -->
                    <div class="showing_sec">                    
                        <div class="shoing_12_area">
                            <div class="content_result"> <p>Showing 12 results</p> </div>
                            <div class="btn_brn_arrow_area">
                                <div class="single_arrow"><a href="#"><i class="fas fa-caret-left"></i></a></div>
                                <div class="single_arrow"><a href="#"><i class="fas fa-caret-right"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- end Showing 12 results  -->
                    <!-- product area area  -->
                    <div class="product_area">
                        <div class="single_product_area">

                            @foreach ($products as $product)
                            <div class="single_product">
                                <div class="single_product_content">
                                    <div class="single_product_img"> 
                                        @if (isset($product->mainImage))
                                        <img src="{{ asset($product->mainImage->filepath . $product->mainImage->$filename )}}" alt="">
                                        @endif
                                    </div>
                                    <div class="single_product_title">
                                        <h3><a href="#">{{ $product->name }}</a></h3>
                                    </div>
                                    <div class="text_p">Part No. {{ $product->part_number }}</div>
                                    <div class="review_p">
                                        <div class="star_p"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i></div>
                                        <div class="rev_text">(56 Reviews)</div>
                                    </div>
                                    <div class="price_area">
                                        <div class="product_p">USD {{ $product->unit_price }}</div>
                                        <div class="quantity-block up_quantity_box">
                                            <button class="quantity-arrow-minus"> - </button>
                                            <input class="quantity-num" type="number" value="1" />
                                            <button class="quantity-arrow-plus"> + </button>
                                        </div>

                                    </div>
                                    <div class="buy_area">
                                        <div class="love_area cmn_l_area">
                                        </div>
                                        <div class="buy_btn"><a href="#">Buy Now</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- product-area   -->
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
