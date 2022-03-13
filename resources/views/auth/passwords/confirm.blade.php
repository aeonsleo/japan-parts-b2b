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
                                <h2>{{ __('Confirm Password') }}</h2>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form_area">
                                <div class="single_input ">
                                    <label for="Password">{{ __('Password') }} <span>*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="single_input button_area">
                                    <input type="submit" value="{{ __('Confirm') }}">
                                </div>

                                <div class="single_input forgot_pass_t ">
                                    @if (Route::has('password.request'))
                                    <p class="sp_text">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                    </p>
                                    @endif
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
