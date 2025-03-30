<!DOCTYPE html>
<html lang="en">


@include('website.header')
<body>


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        @include('website.menu')
        <!-- END / HEADER -->

    </div>


    <section class="section-sub-banner bg-9">
        <div class="awe-overlay"></div>
        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>ABOUT PRANTIKA</h2>
                    <p style="text-align: center" >Prantika- Where Nature and Discovery Unite</p>
                </div>
            </div>

        </div>

    </section>


    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">

            <div class="about">

                <!-- ITEM -->
                <div class="about-item">

                    <div class="img owl-single">
                        <img src="{{ asset('assets/web/images/about/about_image1.jpg') }}" alt="">
                        <img src="{{ asset('assets/web/images/about/about_image2.jpg') }}" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading">ABOUT PRANTIKA</h2>
                        <div class="desc">
                            <p>Prantika is more than just a destination; it is an experience deeply rooted in the heart of the Sundarbans.
                            Designed to offer an immersive ecotourism journey, Prantika is where the untamed beauty of the mangroves meets comfort and cultural heritage.
                             Our commitment lies in preserving the delicate ecosystem while providing visitors with an authentic and unforgettable adventure.</p><br>
                            <p>At Prantika, every path leads to discovery. Whether you witness the elusive Royal Bengal Tiger, explore winding river channels,
                                or engage with vibrant local communities, we ensure that your time here is a blend of exploration, relaxation, and conservation.
                                Our initiative promotes sustainable tourism, supporting the livelihoods of those who have lived in harmony with the wilderness for generations.
                            </p>

                            <p>
                                With a perfect balance of adventure and tranquillity, Prantika invites you to embrace the whispers of the wild, indulge in nature’s rhythms, and immerse yourself in the untold stories of the Sundarbans!
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

                <!-- ITEM -->
                <div class="about-item about-right">

                    <div class="img">
                        <img src="{{ asset('assets/web/images/about/about_image3.jpg') }}" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading">EXPLORE SUNDARBANS</h2>
                        <h4>A Land Where Water and Wilderness Merge</h4>
                        <div class="desc">
                            <p>
                                The Sundarbans is a mystical realm where land and water entwine, where the tides dictate the rhythm of life,
                                and where adventure awaits at every turn. This UNESCO World Heritage Site is the largest tidal halophytic mangrove forest in the world,
                                home to an astonishing array of wildlife, from the majestic Bengal Tiger to the playful Irrawaddy dolphins gliding through the brackish waters.

                            </p>

                            <p>
                                Embark on an unforgettable journey through meandering creeks and dense canopies, where every rustling leaf and shifting shadow tells a story.
                                Here, nature reveals its raw beauty, offering travelers the perfect blend of thrill and tranquillity. Whether you seek an adrenaline-filled boat safari,
                                an insightful birdwatching expedition, or simply a peaceful retreat into the wild, the Sundarbans is an experience like no other.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

                  <!-- ITEM -->
                  <div class="about-item">

                    <div class="img owl-single">
                        <img src="{{ asset('assets/web/images/about/about_image4.jpg') }}" alt="">
                        <img src="{{ asset('assets/web/images/about/about_image3.jpg') }}" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading">MANGROVE FOREST - THE BREATHING LUNGS OF THE EARTH</h2>
                        <div class="desc">
                            <p>
                                The Sundarbans Mangrove Forest is an ecosystem unlike any other, a labyrinth of roots and waterways that stands as a guardian
                                to protect against erosion and extreme weather. These salt-tolerant trees, with their intricate networks of aerial roots,
                                not only provide a habitat for countless species but also serve as a natural buffer against cyclones and rising tides.

                            </p>

                            <p>
                                This fragile yet resilient ecosystem is home to an incredible diversity of flora and fauna,
                                including over 260 species of birds, the mystical mangrove horseshoe crab, the Indian python,
                                and the elusive estuarine crocodile. The rich biodiversity of the mangrove forest makes it one of the crucial ecological
                                zones on the planet, supporting both wildlife and the communities who depend on it for their livelihoods.
                            </p>

                            <p>
                                A visit to the mangrove forest is a step into an ancient world, where nature reigns supreme,
                                and every ripple in the water holds a mystery waiting to be discovered.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

                 <!-- ITEM -->
                 <div class="about-item about-right">

                    <div class="img">
                        <img src="{{ asset('assets/web/images/about/mission-vission.jpg') }}" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading">OUR VISION </h2>

                        <div class="desc">
                            <p>
                                <strong>Vision:</strong> To weave an everlasting bond between humans and nature, where conservation, exploration,
                                and culture bloom together like the tides.
                            </p>

                            <p>
                                <h2 class="heading"> MISSION</h2>
                               <ul>
                                <li> To cradle the Sundarbans in gentle hands, where eco-tourism breathes life into preservation. </li>
                                <li> To honor the rhythm of the land, uplifting the spirit of the people who call it home. </li>
                                <li> To tell the untold stories of the wild, through wind, water, and wonder.</li>
                               </ul>

                            </p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

            </div>

        </div>
    </section>
    <!-- END / ABOUT -->
    @include('website.footer')
</body></html>
