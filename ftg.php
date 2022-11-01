<?php
/**
 * Template Name: FTG Page
 *
 * The first time guest page of the letitsnow Theme
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

    <!-- Start Particles -->
    <div id="particles-js"></div>
    <!-- End Particles -->

    <!-- Start Header-->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('background_image'); ?>') no-repeat bottom center scroll; background-size: cover; height: 90vh;">
        <div class=" invisible md:visible bg-no-repeat bg-scroll bg-cover relative z-5" style="background:
                url('<?php the_field('people_layer'); ?>') no-repeat bottom center scroll; background-size: cover; height: 90vh;">
            <div class="visible text-left relative pt-10 px-3 z-5">
                <h1 class="uppercase text-red text-6xl lg:text-8xl font-black leading-ish"><?php the_field('header_title'); ?></h1>
                <p class="capitalize text-red font-bold text-lg lg:text-2xl  pr-10"><?php the_field('header_subtitle'); ?></p>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Free Gift -->
    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">
                    <div class="col-span-12 md:col-span-7 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left"><?php the_field('gift_title'); ?></h2>
                            <p class="text-md"><?php the_field('gift_subtitle'); ?></p>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-5 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="<?php the_field('gift_picture'); ?>"
                             alt="Foothills Church branded mug">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Free Gift -->

    <!-- Start Invite Section-->
    <div class="bg-white py-5 relative">
        <div class="lg:w-9/12 mx-auto relative">
            <div class="grid grid-cols-12 gap-4 p-5">
                <div class="col-span-12 md:col-span-11 text-left">
                    <h2 class="uppercase text-2xl lg:text-4xl"><?php the_field('invite_header'); ?></h2>
                    <p class="text-md lg:text-xl"><?php the_field('invite_paragraph'); ?></p>
                </div>

                <!-- Outer grid for the times-->
                <div class="col-span-12 md:col-span-8">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 md:col-span-6 pb-5">
                            <h4 class="font-black text-2xl"><?php the_field('l1'); ?></h4>
                            <p><?php the_field('l1_time'); ?></p>
                            <button id="three"
                                    class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                <?php the_field('calendar_button_1'); ?>
                            </button>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <h4 class="font-black text-2xl"><?php the_field('l2'); ?></h4>
                            <p><?php the_field('l2_time'); ?></p>
                            <button id="four"
                                    class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                <?php the_field('calendar_button_1'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Invite Section -->

    <!-- Start Directions / Map -->
    <div class="bg-green py-5 relative">
        <div class="lg:w-9/12 mx-auto relative text-white">
            <div class="grid grid-cols-12 gap-4 p-5">
                <div class="col-span-12 md:col-span-8 text-left">
                    <h2 class="uppercase text-2xl lg:text-4xl pb-5"><?php the_field('directions_title'); ?></h2>
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>

                <!-- Outer grid for the times-->
                <div class="col-span-12 md:col-span-12">
                    <div class="grid grid-cols-12">
                        <?php if (have_rows('location_1')): ?>
                            <?php while (have_rows('location_1')): the_row(); ?>
                                <div class="col-span-12 md:col-span-6 pb-5">
                                    <h4 class="font-black text-2xl"><?php the_sub_field('location_title'); ?></h4>
                                    <p><?php the_sub_field('location_address'); ?></p>
                                    <div class="text-left mb-5">
                                        <a class= href="<?php the_sub_field('secondary_button_link'); ?>"
                                           target="_blank">
                                            <button class="mx-auto lg:mx-0 border-white border-2 text-white font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php the_sub_field('secondary_button_title'); ?>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('location_2')): ?>
                            <?php while (have_rows('location_2')): the_row(); ?>
                                <div class="col-span-12 md:col-span-6 pb-5">
                                    <h4 class="font-black text-2xl"><?php the_sub_field('location_title'); ?></h4>
                                    <p><?php the_sub_field('location_address'); ?></p>
                                    <div class="text-left mb-5">
                                        <a href="<?php the_sub_field('secondary_button_link'); ?>"
                                           target="_blank">
                                            <button class="mx-auto lg:mx-0 border-white border-2 text-white font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php the_sub_field('secondary_button_title'); ?>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map / Directions -->

    <!-- Start FAQ -->
    <div class="bg-white py-5">
        <div class="lg:w-9/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 p-5">
                <div class="col-span-12 md:col-span-12 text-left">
                    <h2 class="uppercase text-2xl lg:text-4xl"><?php the_field('faq_title'); ?></h2>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 px-5 qa">
                <?php
                if (have_rows('q&a')):
                    while (have_rows('q&a')) : the_row(); ?>
                        <div class="col-span-12 md:col-span-6 pb-5">
                            <h4 class="font-black text-xl uppercase"><?php the_sub_field('question'); ?></h4>
                            <p><?php the_sub_field('answer'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Start Footer Cards -->
    <div class="bg-green relative py-10">
        <div class="lg:w-10/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">
                <?php if (have_rows('card_1')): ?>
                    <?php while (have_rows('card_1')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Woman smiling at baby">
                                <div class="bg-red text-center text-white py-10 rounded-b-lg">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('title'); ?></h3>
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

                <?php if (have_rows('card_2')): ?>
                    <?php while (have_rows('card_2')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4">
                            <div class="shadow-lg">
                                <img class="rounded-t-lg"
                                     src="<?php the_sub_field('image'); ?>"
                                     alt="Mother and son in sled">
                                <div class="bg-red text-center text-white py-10 rounded-b-lg">
                                    <h3 class="text-2xl font-bold uppercase"><?php the_sub_field('title'); ?></h3>
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

                <div class="col-span-12 md:col-span-4">
                    <img class="hidden lg:block text-center mx-auto"
                         src="<?php the_field('footer_rando'); ?>" alt="Couple holding tree">
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer Cards -->


<?php
get_footer();

