<?php
/**
 * Template Name: Experience Page
 *
 * The experience page of the letitsnow Theme
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
                            <img src="<?php the_field('modal_icon'); ?>" alt="Foothills Church Circle Icon">
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

    <!-- Start Particles -->
    <div id="particles-js"></div>
    <!-- End Particles -->

    <!-- Start Header -->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('background_image'); ?>') no-repeat bottom center scroll; background-size: cover; height: 90vh;">
        <div class=" invisible md:visible bg-no-repeat bg-scroll bg-cover relative z-5" style="background:
                url('<?php the_field('background_randos'); ?>') no-repeat bottom center scroll; background-size: cover; height: 90vh;">
            <div class="visible text-left relative pt-10 px-3 z-5">
                <h1 class="uppercase text-red text-6xl lg:text-6xl font-black leading-ish"><?php the_field('header_title'); ?></h1>
                <p class="capitalize text-red font-bold text-lg lg:text-2xl  pr-10"><?php the_field('header_subtitle'); ?></p>
                <button id="two"
                        class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                    <?php the_field('cta_button_text'); ?>
                </button>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Invite Section -->
    <div class="bg-white py-5 relative">
        <div class="lg:w-9/12 mx-auto relative">
            <div class="grid grid-cols-12 gap-4 p-5">
                <div class="col-span-12 md:col-span-11 text-left">
                    <h2 class="uppercase text-2xl lg:text-4xl"><?php the_field('invite_header'); ?></h2>
                    <p class="text-md lg:text-xl"><?php the_field('invite_subtitle'); ?></p>
                </div>

                <div class="col-span-12 md:col-span-12">
                    <div class="grid grid-cols-12">
                        <?php if (have_rows('location_1')): ?>
                            <?php while (have_rows('location_1')): the_row(); ?>
                                <div class="col-span-12 md:col-span-6 pb-5">
                                    <h4 class="font-black text-2xl"><?php the_sub_field('location_title'); ?></h4>
                                    <p><?php the_sub_field('location_time'); ?></p>
                                    <div class="text-left mb-5">
                                        <button id="three"
                                                class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('primary_button_text'); ?>
                                        </button>
                                        <a href="<?php the_sub_field('secondary_button_link'); ?>" target="_blank">
                                            <button class="mx-auto lg:mx-0 border-black border-2 text-black font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php the_sub_field('secondary_button_text'); ?>
                                        </a>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('location_2')): ?>
                            <?php while (have_rows('location_2')): the_row(); ?>
                                <div class="col-span-12 md:col-span-6 pb-5">
                                    <h4 class="font-black text-2xl"><?php the_sub_field('location_title'); ?></h4>
                                    <p><?php the_sub_field('location_time'); ?></p>
                                    <div class="text-left mb-5">
                                        <button id="four"
                                                class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('primary_button_text'); ?>
                                        </button>
                                        <a href="<?php the_sub_field('secondary_button_link'); ?>" target="_blank">
                                            <button class="mx-auto lg:mx-0 border-black border-2 text-black font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php the_sub_field('secondary_button_text'); ?>
                                        </a>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Invite Section -->

    <!-- Start About Cards -->
    <div class="bg-green relative py-10">
        <div class="lg:w-10/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">
                <?php if (have_rows('card_1')): ?>
                    <?php while (have_rows('card_1')): the_row(); ?>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Fresh Chocolate Chip Cookies">
                                <div class="bg-red text-center text-white py-5 px-5 rounded-b-lg lg:h-64">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('title'); ?></h3>
                                    <p class="text-left"><?php the_sub_field('paragraph'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('card_2')): ?>
                    <?php while (have_rows('card_2')): the_row(); ?>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Stylized hot cocoa">
                                <div class="bg-red text-center text-white py-5 px-5 rounded-b-lg lg:h-64">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('title'); ?></h3>
                                    <p class="text-left"><?php the_sub_field('paragraph'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="col-span-12 md:col-span-4">
                    <img class="hidden xl:block mx-auto pt-16"
                         src="<?php the_field('rando_1'); ?>" alt="Man Carrying Boxes">
                </div>
            </div>
        </div>
    </div>
    <!-- End About Cards -->

    <!-- Start Download Section-->
    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">
                    <div class="col-span-12 md:col-span-7 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left"><?php the_field('download_title'); ?></h2>
                            <p class="text-md mb-2"><?php the_field('download_subtitle'); ?></p>
                            <a href="<?php the_field('download_button_link'); ?>" target="_blank">
                                <button class="mx-auto lg:mx-0 border-white border-2 text-white font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <?php the_field('download_button_text'); ?>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-5 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="<?php the_field('download_image'); ?>"
                             alt="A Foothills Christmas Brand Photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Download Section -->

    <!-- Start Footer Cards -->
    <div class="bg-green relative py-10">
        <div class="lg:w-10/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">

                <div class="col-span-12 md:col-span-4">
                    <img class="hidden lg:block mx:auto"
                         src="<?php the_field('rando_3'); ?>" alt="Girl with Tree">
                </div>

                <?php if (have_rows('card_3')): ?>
                    <?php while (have_rows('card_3')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Woman smiling and pointing">
                                <div class="bg-red text-center text-white py-10 rounded-b-lg">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('card_title'); ?></h3>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('card_4')): ?>
                    <?php while (have_rows('card_4')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Woman teaching kids">
                                <div class="bg-red text-center text-white py-10 rounded-b-lg">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('card_title'); ?></h3>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="mx-auto lg:mx-0 border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text'); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- End Footer Cards -->


<?php
get_footer();
