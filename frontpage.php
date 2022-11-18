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

    <!-- The Modal -->
    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-top bg-no-repeat bg-scroll bg-cover relative"
                         style="background: url('<?php the_field('modal_background'); ?>') center center;">

                        <div class="modal-icon">
                            <img src="<?php the_field('modal_icon'); ?>" alt="Foothills Church Icon">
                        </div>
                    </div>
                    <div class="modal-inner">
                        <p class="pb-5"><?php the_field('modal_text'); ?></p>

                        <?php if (have_rows('main_button')): ?>
                            <?php while (have_rows('main_button')): the_row(); ?>
                                <a download
                                   href="<?php the_sub_field('button_download'); ?>">
                                    <button class="mx-auto lg:mx-0 w-full bg-yellow text-black font-bold rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('secondary_button')): ?>
                            <?php while (have_rows('secondary_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link'); ?>">
                                    <button class="mx-auto lg:mx-0 w-full border-black border-2 text-black font-bold rounded-full my-1 md:my-1 py-3 px-6 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text'); ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

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
            <h1 class="text-center uppercase text-black text-2xl pb-10">Pick which worship experience works best for
                your family!</h1>

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
                    <a
                            href="#">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Mark My Calendar
                        </button>
                    </a>
                </div>

                <div class="col-span-12 md:col-span-4 mb-5">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a
                            href="#">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Mark My Calendar
                        </button>
                    </a>
                </div>

                <div class="col-span-12 md:col-span-4 mb-5">
                    <div class="text-xl mb-3">
                        <p>Friday, December 23</p>
                        <p> 6:30pm</p>
                        <p> Maryville Location</p>
                    </div>
                    <a
                            href="#">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Mark My Calendar
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
                    <a
                            href="#">
                        <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-md py-3 md:px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Mark My Calendar
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Service Info -->

<?php
get_footer();