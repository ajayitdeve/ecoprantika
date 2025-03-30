@extends('layouts.app')

@section('content')
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Registration form -->
        <form method="POST" action="{{ route('enduser.register') }}" class="flex-fill">
            @csrf
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3 ">
                                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2 p-2"
                                    style="background-color: gray;">
                                    <img src="{{ asset('assets/images/apex-logo.png') }}" class="h-48px" alt="">
                                </div>
                                <h5 class="mb-0">Create account</h5>
                                <span class="d-block text-muted">All fields are required</span>
                            </div>



                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" autofocus>
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input id="last_name" type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" value="{{ old('last_name') }}"
                                                 autofocus>
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle-plus text-muted"></i>
                                            </div>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="form-control-feedback form-control-feedback-start">



                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}"  >
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-envelope text-muted"></i>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile No</label>
                                        <div class="form-control-feedback form-control-feedback-start">



                                            <input id="mobile" type="number"
                                                class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                value="{{ old('mobile') }}" >
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-phone text-muted"></i>
                                            </div>
                                            @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Create password</label>
                                        <div class="form-control-feedback form-control-feedback-start">


                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                 >
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
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Confirm password</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation"
                                              >
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-lock text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Line Address</label>
                                        <div class="form-control-feedback form-control-feedback-start">


                                            <input id="address" type="text"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="address"
                                               >
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-map-pin-line"></i>
                                            </div>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Post Code</label>
                                        <div class="form-control-feedback form-control-feedback-start">


                                            <input id="postcode" type="text"
                                                class="form-control @error('postcode') is-invalid @enderror"
                                                name="postcode" >
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-map-pin-line"></i>
                                            </div>
                                            @error('postcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>


                          <input type="hidden" name="team_id" value="3" />

                            <div class="card-body text-end border-top">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ph-plus me-2"></i>
                                    Create account
                                </button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </form>
        <!-- /registration form -->

    </div>
@endsection
