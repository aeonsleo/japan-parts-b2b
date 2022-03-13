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
                                <h2>{{ __('Forgot Password') }}</h2>
                            </div>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
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
                                <div class="single_input button_area" style="width: 100%">
                                    <input type="submit" class="btn btn-primary" value="{{ __('Send Password Reset Link') }}">
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
