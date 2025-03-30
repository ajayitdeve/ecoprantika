<!DOCTYPE html>
<html lang="en">


@include('website.header')
<body>


    <!-- PRELOADER -->
    {{-- <div id="preloader">
        <span class="preloader-dot"></span>
    </div> --}}
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        @include('website.menu')
        <!-- END / HEADER -->

       <!-- BANNER SLIDER -->
       @include('website.slider')
    <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        {{-- <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row v-align">
                        <div class="col-lg-3">
                            <h2 class="title-room">ROOMS & RATES</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="availability-form">
                                <input type="text" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select">
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="awe-select">
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="vailability-submit">
                                    <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END / CHECK AVAILABILITY -->


        <!-- TOURISM CENTRE -->
        <section class="section-accomd awe-parallax bg-14">
            <div class="container">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h4 style="font-size: 25px" class="heading">OUR ECO-KNOWLEDGE TOURISM CENTRE </h4>
                                <img width="350px"  src="{{ asset('assets/web/images/header-icon.png') }}" alt="icon">
                                <p style="font-size: 17px; color: black; font-family: montserrat; font-weight: 500;">Located amidst a secluded tribal village in Tipligheri, the Community Resilience Through Adaptation and Climate Knowledge (CRACK) centre offers you an extraordinary experience! With an in-build weather station, a living lab integrated with a green setting, you get a rare opportunity to understand biodiversity in a climate change milieu.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">

                                <div class="gallery  no-padding">

                                    <!-- GALLERY CONTENT -->
                                    <div class="gallery-content hover-img">
                                        <div class="row">
                                            <div class="gallery-isotope col-3 pd-2">

                                                <!-- ITEM SIZE -->
                                                    <div class="item-size"></div>
                                                    <!-- END / ITEM SIZE -->
                                                <!-- ITEM -->

                                                <div class="item-isotope suite dining ">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_07.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_07.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope  ground bathroom suite">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_06.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_06.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope ground bathroom dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_11.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_11.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_09.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_09.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope  ground suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_03.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_03.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope ground bathroom dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/prantika-gallery/Room_02.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/prantika-gallery/Room_02.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->


                                            </div>
                                        </div>

                                        <div class="our-gallery text-center">
                                            <a href="/gallery" style="background: #e2f0d9; padding: 15px 25px; font-weight: 700;" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                                        </div>

                                    </div>
                                    <!-- GALLERY CONTENT -->

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END / TOURISM CENTRE -->


        <!-- ABOUT -->
        <section class="section-home-about bg-2">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img" style="padding-bottom: 50px">
                                <a href="#"><img src="{{ asset('assets/web/images/about/About-us.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text" style="padding-top: 50px">
                                <h2 class="heading">ABOUT SUNDARBANS</h2>

                                <p style="font-size: 22px">Away from the humdrum of a mundane world, a beautiful ecosystem thrives in the world's largest mangrove forest of Sundarbans.
                                </p>
                                <a href="#" style="background: #e2f0d9; padding: 15px 25px; font-weight: 700;" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- Gallery -->

        <section class="section-accomd awe-parallax bg-14">
            <div class="container">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h4 style="font-size: 25px" class="heading">GALLERY </h4>
                                <img width="350px"  src="{{ asset('assets/web/images/header-icon.png') }}" alt="icon">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">

                                <div class="gallery  no-padding">

                                    <!-- GALLERY CONTENT -->
                                    <div class="gallery-content hover-img">
                                        <div class="row">
                                            <div class="gallery-isotope col-4 pd-2">

                                                <!-- ITEM SIZE -->
                                                    <div class="item-size"></div>
                                                    <!-- END / ITEM SIZE -->
                                                <!-- ITEM -->

                                                <div class="item-isotope suite dining ">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img1.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/gallery-img1.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope  ground bathroom suite">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img2.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img2.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope ground bathroom dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img3.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/gallery-img3.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img4.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img src="{{ asset('assets/web/images/gallery/gallery-img4.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope  ground suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img5.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img5.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope ground bathroom dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img6.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img6.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope ground suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img7.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img7.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                <!-- ITEM -->
                                                <div class="item-isotope bathroom suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img8.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img8.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                 <!-- ITEM -->
                                                 <div class="item-isotope bathroom suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img9.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img  style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img9.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->

                                                 <!-- ITEM -->
                                                 <div class="item-isotope bathroom suite dining">
                                                    <div class="gallery_item">
                                                        <a  href="{{ asset('assets/web/images/gallery/gallery-img10.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                                            <img style="height: 200px;" src="{{ asset('assets/web/images/gallery/gallery-img10.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END / ITEM -->


                                            </div>
                                        </div>

                                        <div class="our-gallery text-center">
                                            <a style="background: #e2f0d9; padding: 15px 25px; font-weight: 700;" href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                                        </div>

                                    </div>
                                    <!-- GALLERY CONTENT -->

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--End Gallery -->


 <!-- FOOTER -->
 @include('website.footer')
<!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->



</body>

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 14:26:44 GMT -->
</html>
