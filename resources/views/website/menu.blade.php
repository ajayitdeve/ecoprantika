

<header id="header" class="header-v2">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">

                <span><i class="lotus-icon-location"></i> B 43, Survey Park, Kolkata  700 075 </span>
                <span><i class="lotus-icon-phone"></i> +91 98305 39990 </span>
            </div>
            {{-- <div class="header_right float-right">

                <span class="login-register">
                    <a href="login.html">Login</a>
                    <a href="register.html">register</a>
                </span>

                <div class="dropdown currency">
                    <span>USD <i class="fa fa"></i></span>
                    <ul>
                        <li class="active"><a href="#">USD</a></li>
                        <li><a href="#">EUR</a></li>
                    </ul>
                </div>

                <div class="dropdown language">
                    <span>ENG</span>

                    <ul>
                        <li class="active"><a href="#">ENG</a></li>
                        <li><a href="#">FR</a></li>
                    </ul>
                </div>

            </div> --}}
        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">
            <!-- HEADER LOGO -->

<?php

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

@if(isMobile())
<div class="header_logo">
    <a href="/"><img style=" background-color: green;" src="{{ asset('assets/web/images/logo.png') }}" alt=""></a>
</div>
@else

<div class="header_logo">
    <a href="/"><img src="{{ asset('assets/web/images/logo.png') }}" alt=""></a>
</div>
@endif
            <!-- END / HEADER LOGO -->

            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">

                    <li><a href="/about">About Prantika </a></li>
                    <li><a href="/tourism">Explore Sundarbans </a></li>

                    <li><a href="/tourpackage">Packages </a></li>

                    <li><a href="#">Booking </a></li>
                    <li><a href="/gallery"> Gallery </a></li>
                    <li><a href="/contact-us">Contact </a></li>


                    <li><a href="#"><i class="fa fa-facebook on icon-circle"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>


                </ul>
            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                <span></span>
            </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>
