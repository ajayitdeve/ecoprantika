@extends('layouts.app')

@section('content')
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login card -->

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                            <img style=" background-color: #577f45;" src="{{ asset('assets/web/images/logo.png') }}"
                                class="h-48px" alt="">
                        </div>
                        <h5 class="mb-0">Login to your account</h5>
                        <span class="d-block text-muted">Enter your credentials below</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="form-control-feedback-icon">
                                <i class="ph-user-circle text-muted"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="form-control-feedback form-control-feedback-start">




                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            <div class="form-control-feedback-icon">
                                <i class="ph-lock text-muted"></i>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>





                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <label class="form-check">




                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                            <span class="form-check-label">Remember</span>
                        </label>




                        @if (Route::has('password.request'))
                        <a class="ms-auto" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>


                    @endif
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>


                    <div class="text-center text-muted content-divider mb-3">
                        <span class="px-2">Don't have an account?</span>
                    </div>

                    <div class="mb-3">
                        <a href="{{route('signup')}}" class="btn btn-light w-100">Sign up</a>
                    </div>


                </div>
            </div>
        </form>
        <!-- /login card -->

    </div>







@endsection
