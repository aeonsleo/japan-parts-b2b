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
                                <h2>{{ __('New Password') }}</h2>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form_area">
                                <div class="single_input">
                                    <label for="email">{{ __('Email') }} <span>*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="single_input ">
                                    <label for="Password">{{ __('Password') }} <span>*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="single_input ">
                                    <label for="password-confirm">{{ __('Confirm Password') }} <span>*</span></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                
                                <div class="single_input button_area">
                                    <input type="submit" value="{{ __('Reset Password') }}">
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
