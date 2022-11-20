<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the letitsnow Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>


    <!-- Start Particles-->
    <div id="particles-js"></div>
    <!-- End particles -->

    <!-- Start Header -->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('background_image'); ?>') no-repeat bottom center scroll; background-size: cover; height: 70vh;">
        <div class="text-center relative pt-24 lg:p-36 z-5">
            <img class="mx-auto w-11/12 md:w-8/12 lg:w-5/12"
                 src="<?php the_field('afc_logo'); ?>" alt="A Foothills Christmas Logo">
            <h1 class="uppercase text-white text-2xl md:text-3xl py-5 px-10 z-5"><?php the_field('tagline'); ?></h1>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Service Info -->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('noise_background'); ?>') no-repeat bottom center scroll; background-size: cover; ">
        <div class=" lg:max-w-6xl lg:text-center lg:mx-auto pt-10 p-5">
            <h1 class="text-center uppercase text-black text-2xl pb-10">Pick the worship experience that works best for your family
                </h1>

            <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-black mb-10 text-center">
                <div class="col-span-12">
                    <h2 class="text-center uppercase text-black text-xl font-bold">maryville</h2>
                </div>

                <div class="col-span-12 md:col-span-4 mb-5">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a download
                            href="<?php the_field('cal1'); ?>">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <i class="fa-solid fa-calendar-days"></i> Mark My Calendar
                        </button>
                    </a>
                </div>

                <div class="col-span-12 md:col-span-4 mb-5">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a download
                       href="<?php the_field('cal2'); ?>">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <i class="fa-solid fa-calendar-days"></i> Mark My Calendar
                        </button>
                    </a>
                </div>

                <div class="col-span-12 md:col-span-4 mb-5">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a download
                       href="<?php the_field('cal3'); ?>">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <i class="fa-solid fa-calendar-days"></i> Mark My Calendar
                        </button>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-black">
                <div class="col-span-12">
                    <h2 class="text-center uppercase text-black text-xl font-bold">knoxville</h2>
                </div>

                <div class="col-span-12 text-center">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a download
                       href="<?php the_field('cal4'); ?>">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <i class="fa-solid fa-calendar-days"></i> Mark My Calendar
                        </button>
                    </a>
                </div>

                <div class="col-span-12 pt-10">
                    <h2 class="text-center uppercase text-black text-lg font-bold">- We will not meet on Christmas Day -</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- End Service Info -->

    <!-- Start Split Section 1 -->
    <div id="experience" class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative img-cards" style="background:
                    url('<?php the_field('img_1'); ?>') no-repeat center center scroll; background-size: cover;">
            </div>
        </div>

        <div class="col-span-12 md:col-span-6 bg-green text-white relative">
            <div class="content-middle-medium">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="text-left uppercase text-xl font-bold">Join us for a special worship experience</h2>
                    <p>We’re excited to celebrate the birth of Jesus together through worship with a special candlelight
                        moment.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Split Section 1 -->

    <!-- Start Split Section 2 -->
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 bg-yellow text-black relative order-2 md:order-1">
            <div class="content-middle-medium">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="text-left uppercase text-xl font-bold">Free Cookies</h2>
                    <p>Moonshine Mountain Cookies are a gourmet cookie bakery located right here in East Tennessee.
                        Their handcrafted small-batch cookies will keep you coming back for more!
                    </p>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6 order-1 md:order-2">
            <div class="bg-no-repeat bg-scroll bg-cover relative img-cards" style="background:
                    url('<?php the_field('img_2'); ?>') no-repeat center center scroll; background-size: cover;">
            </div>
        </div>
    </div>
    <!-- End Split Section 2 -->

    <!-- Start Split Section 3 -->
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative img-cards" style="background:
                    url('<?php the_field('img_3'); ?>') no-repeat center center scroll; background-size: cover;">
            </div>
        </div>

        <div class="col-span-12 md:col-span-6 bg-green text-white relative">
            <div class="content-middle-medium">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="text-left uppercase text-xl font-bold">Hot Chocolate Bar</h2>
                    <p>Nothing says "Christmas Season" like a warm cup of hot chocolate and some peppermint sticks. You
                        won't want to miss this special treat at A Foothills Christmas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Split Section 3 -->

    <!-- Start Split Section 4 -->
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 bg-yellow text-black relative  order-2 md:order-1">
            <div class="content-middle-medium">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="text-left uppercase text-xl font-bold">Family Photobooth</h2>
                    <p>Snap a photo of your family this Christmas at FC at our Christmas photo booth!
                    </p>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6 order-1 md:order-2">
            <div class="bg-no-repeat bg-scroll bg-cover relative img-cards" style="background:
                    url('<?php the_field('img_4'); ?>') no-repeat center center scroll; background-size: cover;">
            </div>
        </div>
    </div>
    <!-- End Split Section 4 -->

    <!-- Start FTG Section -->
    <div id="ftg" class="grid grid-cols-12">
        <div class="col-span-12 bg-green text-white relative ">
            <div class=" lg:max-w-6xl lg:text-center lg:mx-auto pt-10 p-5">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="uppercase text-2xl font-bold pb-5">First time at Foothills Church?</h2>
                    <p class="text-left">We know going to a new church can be intimidating, but we promise to do
                        whatever it takes to show
                        you and your family that you belong here at FC this Christmas. We would love to get to know you
                        and answer any questions you might have! Scroll down to find directions to both of our locations
                        and to see some of our Frequently Asked Questions. We hope to see you and your family this
                        Christmas!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End FTG Section -->

    <!-- Start Directions Section -->
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6">
            <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
        </div>

        <div class="col-span-12 md:col-span-6 bg-yellow text-black relative">
            <div class="content-middle-medium">
                <div class="my-10 mx-5 md:mx-10">
                    <h2 class="text-left uppercase text-xl font-bold">Directions</h2>
                    <div class="my-3">
                        <h3 class="font-bold text-lg">Maryville Location</h3>
                        <p>1551 W. Lamar Alexander Pkwy</p>
                        <p>Maryville TN, 37801</p>
                    </div>
                    <a
                            href="<?php the_field('maryville_directions'); ?>" target="_blank">
                        <button class="mx-auto lg:mx-0 bg-green text-white font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Launch In Maps <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                    </a>
                </div>

                <div class="my-10 mx-5 md:mx-10">
                    <div class="my-3">
                        <h3 class="font-bold text-lg">Knoxville Location</h3>
                        <p>1000 Francis Rd</p>
                        <p>Knoxville, TN 37909</p>
                    </div>
                    <a
                            href="<?php the_field('knoxville_directions'); ?>" target="_blank">
                        <button class="mx-auto lg:mx-0 bg-green text-white font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Launch In Maps <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Directions Section -->

    <!-- Start FAQ Section -->
    <div id="faq"  class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('noise_background'); ?>') no-repeat bottom center scroll; background-size: cover; ">
        <div class=" lg:max-w-6xl lg:mx-auto pt-10 p-5">
            <h1 class="text-center uppercase text-black text-2xl">FAQ</h1>

            <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-black mb-10">

                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">WHERE DO I GO WHEN I GET THERE?
                    </h2>
                    <p>If it's your first time visiting us, our volunteers will direct you to our VIP Parking. We have a
                        special parking reserved for you. As you arrive on campus, just follow the signs to our VIP lot.
                        From there, one of our volunteers will direct you to our VIP tent, where a Guest Experience
                        volunteer will meet with you and help get started.
                    </p>
                </div>

                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">WHAT DO I WEAR?

                    </h2>
                    <p>Here at FC we encourage you to come as you are. There is no dress code, but most of our partners
                        wear casual attire. Please feel free to wear what makes you comfortable!
                    </p>
                </div>


                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">HOW LONG DOES THE WORSHIP EXPERIENCE LAST?

                    </h2>
                    <p>Our worship experience usually lasts approximately 70 minutes. We encourage you to arrive early
                        to grab some coffee and check your children into one of our FC Kids environments.

                    </p>
                </div>

                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">WHAT DO I DO IF I HAVE QUESTIONS?

                    </h2>
                    <p>When you arrive on campus, our Guest Experience volunteers at the black VIP tents are equipped to
                        answer any questions you may have! However, you can also go to the Connect Center located in the
                        Atrium if you need to talk to someone. Finally, you can email us at info@foothillschurch.com
                        during the week with any other questions you may have.
                    </p>
                </div>

                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">CAN I ATTEND IF I’M ____?
                    </h2>
                    <p>Fill in the blank with any fear you might have about not being accepted. You belong here. So come as you are, and we’ll see you at A Foothills Christmas!


                    </p>
                </div>

                <div class="col-span-12 md:col-span-6 mt-5">
                    <h2 class="uppercase text-black text-xl font-bold">CAN I WATCH ONLINE?

                    </h2>
                    <p>If you’re going to be out of town, or if you live somewhere else and you won’t be able to make it to A Foothills Christmas, that’s okay! You can still worship online by going to our YouTube on December 23 at 5pm or December 24th at 2pm or 5pm.

                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- End FAQ Section -->


<!--
 - Get the map working
 - Launch stuff
-->

<?php
get_footer();