@extends('layouts.login')

@section('content')
<section class="jpp_form_section  section_cmn">
    <div class="container-fluid">
        <div class="row">
            @include('partials.login-panel')
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="jpp_right_area">
                    <div class="form_area_content">
                        <div class="form_top_content">
                            <div class="smal_back">
                                < <a href="#">Back</a>
                            </div>
                            <div class="inline_h2">
                                <h2>{{ __('Register as Buyer') }}</h2>
                                <div class="resgister_sup_link"><a href="{{ route('supplier.register') }}">{{ __('Register as Supplier') }}</a></div>
                            </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif   
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form_area">
                                <div class="single_input">
                                    <label for="Name">{{ __('Full Name') }} <span>*</span></label>
                                    <input type="text" id="Name" name="name" placeholder="Your full name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="single_input">
                                    <label for="email">{{ __('Email') }} <span>*</span></label>
                                    <input type="email" id="email" name="email" placeholder="name@mail.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                </div>
                                <div class="single_input one_half">
                                    <label for="Password">{{ __('Password') }} <span>*</span></label>
                                    <input type="password" id="Password" name="password" placeholder="*******" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="single_input one_half">
                                    <label for="Repeat_Password">{{ __('Repeat Password') }} * <span>*</span></label>
                                    <input type="password" id="Repeat_Password" name="password_confirmation" placeholder="*******">
                                </div>
                                <div class="single_input button_area">
                                    <input type="submit" value="{{ __('Register') }}">
                                </div>
                                <div class="single_input text_ab ">
                                    <p class="sp_text"><span>*</span> {{ __('Mandatory Field') }}</p>
                                </div>
                                <div class="single_input text_btn_area">
                                    <p class="button_text_f">{{ __('Already Member') }} ? <a href="{{ route('login') }}">{{ __('Login Now.') }}</a></p>
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
