@extends('layouts.login')

@section('content')

<section class="jpp_form_section  jpp_form_section_page_2 section_cmn">
    <div class="container-fluid">
        <div class="row">
            @include('partials.login-panel')   
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="jpp_right_area">
                    <div class="form_area_content form_2_area_content">
                        <div class="form_top_content">
                            <div class="smal_back">
                                < <a href="#">Back</a>
                            </div>
                            <div class="inline_h2">
                                <h2>{{ __('Register as Supplier') }}</h2>
                                <div class="resgister_sup_link"><a href="{{ route('register') }}">{{ __('Register as Buyer') }}</a></div>
                            </div>
                        </div>
                    
                        <form action="#">
                            <div class="form_area">
                            <div class="single_input">
                                <label for="Name">{{ __('Supplier Name / Company Name') }} <span>*</span></label>
                                <input type="text" id="Name" placeholder="Your full name">

                            </div>

                            <div class="single_input">
                                <label for="Company_Address">{{ __('Company Address') }} <span>*</span></label>
                                <input type="text" id="Company_Address" placeholder="Holding no., road, block">

                            </div>


                            <div class="single_input one_half">
                                <label for="Password">{{ __('Company Address (Line 2)') }}</label>
                                <input type="text" id="Company_Address2" placeholder="Area, landmark">
                            </div>
                            <div class="single_input one_half">
                                <label for="zip">{{ __('ZIP') }} <span>*</span></label>
                                <input type="text" id="zip" placeholder="Area, landmark">
                            </div>


                            <div class="single_input one_half">
                                <label for="city">{{ __('City') }} <span>*</span></label>
                                <input type="text" id="City" placeholder="Your city">
                            </div>
                            <div class="single_input one_half">
                                <label for="Country *">{{ __('Country') }} <span>*</span></label>
                                <input type="text" id="Country *" placeholder="Your country">
                            </div>


                            <div class="single_input one_half">
                                <label for="BIN_Number">{{ __('BIN Number') }}</label>
                                <input type="text" id="BIN_Number" placeholder="123-456789">
                            </div>
                            <div class="single_input one_half">
                                <label for="Email ">{{ __('Email') }} <span>*</span></label>
                                <input type="email" id="Email" placeholder="name@mail.com">
                            </div>


                            <div class="single_input one_half">
                                <label for="Contact_n">{{ __('Contact Number') }} <span>*</span></label>
                                <input type="text" id="Contact_n" placeholder="123-456789">
                            </div>
                            <div class="single_input one_half">
                                <label for="Contact_Person">{{ __('Contact Person') }} <span>*</span></label>
                                <input type="text" id="Contact_Person" placeholder="John Doe">
                            </div>



                            <div class="single_input one_half">
                                <label for="Password">{{ __('Password') }} <span>*</span></label>
                                <input type="password" id="Password" placeholder="*******">
                            </div>
                            <div class="single_input one_half">
                                <label for="Repeat_Password">{{ __('Repeat Password') }} * <span>*</span></label>
                                <input type="password" id="Repeat_Password" placeholder="*******">
                            </div>
                            <div class="single_input">
                                <label for="Company_URL">{{ __('Company URL') }}<span>*</span></label>
                                <input type="text" id="Company_URL" placeholder="www.yourcompany.com">

                            </div>
                            <div class="single_input button_area">
                                <input type="button" value="Register">
                            </div>
                            <div class="single_input text_ab ">
                                <p class="sp_text"><span>*</span> {{ __('Mandatory Field') }}</p>
                            </div>
                            <div class="single_input text_btn_area">
                                <p class="button_text_f">{{ __('Already Member') }} ? <a href="#">{{ __('Login Now') }}</a></p>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection