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
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                       </ul>
                        <form action="{{ route('supplier.register') }}" method="POST">
                            @csrf
                            <div class="form_area">
                            <div class="single_input">
                                <label for="Name">{{ __('Supplier Name / Company Name') }} <span>*</span></label>
                                <input type="text" id="Name" placeholder="Your full name" name="company_name" 
                                    class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}">
                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 

                            </div>

                            <div class="single_input">
                                <label for="Company_Address">{{ __('Company Address') }} <span>*</span></label>
                                <input type="text" name="address_line_1" id="Company_Address" placeholder="Holding no., road, block" 
                                    class="form-control @error('address_line_1') is-invalid @enderror" value="{{ old('address_line_1') }}">
                                @error('address_line_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>


                            <div class="single_input one_half">
                                <label for="Password">{{ __('Company Address (Line 2)') }}</label>
                                <input type="text" name="address_line_2" id="Company_Address2" class="form-control @error('address_line_2') is-invalid @enderror"
                                    placeholder="Area, landmark" value="{{ old('address_line_2') }}" value="{{ old('address_line_2') }}">
                                @error('address_line_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>
                            <div class="single_input one_half">
                                <label for="zip">{{ __('ZIP') }} <span>*</span></label>
                                <input type="text" name="zip" id="zip" placeholder="Area, landmark" 
                                    class="form-control @error('zip') is-invalid @enderror" value="{{ old('zip') }}">
                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>


                            <div class="single_input one_half">
                                <label for="city">{{ __('City') }} <span>*</span></label>
                                <input type="text" name="city" id="City" placeholder="Your city" 
                                    class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>
                            <div class="single_input one_half">
                                <label for="Country *">{{ __('Country') }} <span>*</span></label>
                                <div class="">
                                    <div>
                                        <select name="country_id" class="form-select form-control @error('country_id') is-invalid @enderror">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror 
                                    </div>
                                </div>
                                {{-- <input type="text" id="Country *" placeholder="Your country"> --}}
                            </div>


                            <div class="single_input one_half">
                                <label for="BIN_Number">{{ __('BIN Number') }}</label>
                                <input type="text" name="business_id" id="BIN_Number" placeholder="123-456789" value="{{ old('business_id') }}">
                            </div>
                            <div class="single_input one_half">
                                <label for="Email ">{{ __('Email') }} <span>*</span></label>
                                <input type="email" name="email" id="Email" placeholder="name@mail.com" 
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror    
                            </div>


                            <div class="single_input one_half">
                                <label for="Contact_n">{{ __('Contact Number') }} <span>*</span></label>
                                <input type="text" name="phone" id="Contact_n" placeholder="123-456789" 
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>
                            <div class="single_input one_half">
                                <label for="Contact_Person">{{ __('Contact Person') }} <span>*</span></label>
                                <input type="text" name="name" id="Contact_Person" placeholder="John Doe" 
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>



                            <div class="single_input one_half">
                                <label for="Password">{{ __('Password') }} <span>*</span></label>
                                <input type="password" name="password" id="Password" placeholder="*******" 
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                            </div>
                            <div class="single_input one_half">
                                <label for="Repeat_Password">{{ __('Repeat Password') }} * <span>*</span></label>
                                <input type="password" name="password_confirmation" id="Repeat_Password" placeholder="*******">
                            </div>
                            <div class="single_input">
                                <label for="Company_URL">{{ __('Company URL') }}<span>*</span></label>
                                <input type="text" name="url" id="Company_URL" placeholder="www.yourcompany.com" 
                                    class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}">
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror 

                            </div>
                            <div class="single_input button_area">
                                <input type="submit" value="Register">
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