@extends('layouts.app')

@section('content')
    <section class="banner_section  big_section_cmn">
        <div class="container-fluid">
            <div class="banner_content">
                <h1>Get better B2B Professional
                    Support for Car Parts</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a turpis eu ex dictum bibendum eu
                    sit amet eros.</p>
                <div class="search_box_area_banner" id="banner_s_area">
                    <form class="menu_search banner_search">
                        <label for="baner_s_1">1. Search by Part Name</label>
                        <div class="banner_single_s_f">
                            <input class=" " id="baner_s_1" type="search" placeholder="Input Parts Name"
                                aria-label="Search">
                            <button class="btn_c" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <form class="menu_search banner_search">
                        <label for="baner_s_2">2. Search by Part Number</label>
                        <div class="banner_single_s_f">
                            <input class=" " id="baner_s_2" type="search" placeholder="Input OEM  Parts Number"
                                aria-label="Search">
                            <button class="btn_c" type="submit"><i class="fas fa-search"></i></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="parts_catalog big_section_cmn">
        <div class="container-fluid">
            <div class="parts_catalog_content_area">
                <div class="title_area">
                    <h2>3. Search from Parts Catalog</h2>
                </div>
                <div id="parts-catalog"
                    data-key="TWS-D76AA7C1-D8E3-4E92-8B54-9DA7DF901B81"
                    data-back-url="/search?part={article}&brand={brand}"
                ></div>
                <script type="application/javascript" src="https://gui.parts-catalogs.com/v2/parts-catalogs.js"></script>
            </div>
        </div>
    </section>

    @include('partials.car_slider')
    @include('partials.delivery_guarantee')
    @include('partials.shop_by_brands')
    @include('partials.footer')
@endsection
