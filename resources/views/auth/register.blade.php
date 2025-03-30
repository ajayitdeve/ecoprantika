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
                        <h2>REGISTER FORM</h2>
                        <p class="text-center">If you no have account in lotus Hotel! Register and feeling</p>
                        <form method="POST" action="{{ route('register') }}" class="account_form">
                            @csrf

                            <div class="field-form">
                                <input placeholder=" Name" id="name" type="text" class="form-control field-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                            <div class="field-form">


                                <input placeholder="Email" id="email" type="email" class="form-control  field-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                            <div class="field-form">

                                <input placeholder="Password" id="password" type="password" class="form-control field-text  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>

                            <div class="field-form">
                                <input  placeholder="Confirm Password" id="password-confirm" type="password" class="form-control field-text " name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13">REGISTER</button>
                            </div>
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
