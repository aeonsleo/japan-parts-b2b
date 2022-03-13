@extends('layouts.login')

@section('content')
<section class="jpp_form_section  section_cmn">
    <div class="container-fluid">
        <div class="row">
            @include('partials.login-panel')
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="jpp_right_area">
                    <div class="form_area_content form_3_area_content">
                        <div class="form_top_content">
                            @if (url()->previous())
                            <div class="smal_back">
                                < <a href="{{ url()->previous() }}">Back</a>
                            </div>
                            @endif
                            <div class="inline_h2">
                                <h2>Welcome</h2>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form_area">
                                <div class="single_input">
                                    <label for="email">{{ __('Email') }} <span>*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="single_input forgot_pass_t ">
                                    @if (Route::has('password.request'))
                                    <p class="sp_text">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                    </p>
                                    @endif
                                </div>
                                <div class="single_input ">
                                    <label for="Password">{{ __('Password') }} <span>*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="single_input ">
                                    <div class="check_bok_keep_login">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"> {{ __('Keep me logged-in') }}</label>
                                </div>
                                </div>
                                
                                <div class="single_input button_area">
                                    <input type="submit" value="Login">
                                </div>
                            
                                <div class="single_input text_btn_area">
                                    <p class="button_text_f">{{ __('Don\'t have access?') }} <a href="{{ route('register') }}"> {{ __('Register Now') }}</a></p>
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
