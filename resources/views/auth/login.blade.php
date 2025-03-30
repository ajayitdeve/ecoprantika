<!DOCTYPE html>
<html lang="en">


@include('website.header')

<body>



    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        @include('website.menu')
        <!-- END / HEADER -->






        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">
                        <h2>LOGIN ACCOUNT</h2>
                        <p class="text-center">Login Here</p>
                        <form class="account_form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="field-form">

                                <input id="email" type="email"
                                    class="form-control field-text @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="User name">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-user-circle text-muted"></i>
                                </div>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                {{-- <input type="text" class="" placeholder="User name"> --}}
                            </div>
                            <div class="field-form">

                                <input id="password" type="password"
                                    class="form-control  field-text @error('password') is-invalid @enderror"
                                    name="password"  autocomplete="current-password" placeholder="Password">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-lock text-muted"></i>
                                </div>

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                            </div>
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13">Login</button>
                            </div>
                            <span class="account-desc">I don’t have an account - <a href="#">Forgot
                                    Password</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->




        @include('website.footer')


    </div>
</body>

</html>
