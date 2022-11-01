<?php
/**
 * Template Name: Kids Page
 *
 * The kids page of the letitsnow Theme
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
    <!-- End Particles -->

    <!-- Start Header -->
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
            url('<?php the_field('background_image'); ?>') no-repeat bottom center scroll; background-size: cover; height: 100vh;">
        <div class="visible text-left relative pt-10 px-3 md:pl-10 z-5">
            <h1 class="uppercase text-red text-5xl lg:text-6xl font-black leading-ish"><?php the_field('header_title'); ?></h1>
            <p class="capitalize text-red font-bold text-lg lg:text-2xl pr-10"><?php the_field('header_subtitle'); ?></p>
            <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-black">
                <div class="col-span-12 md:col-span-4 z-5">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img class="hidden lg:block absolute left-36 bottom-3 z-5 w-1/12"
             src="<?php the_field('rando_1'); ?>" alt="Child in beanie">
        <img class="hidden lg:block absolute right-36 bottom-3 z-5 w-4/12"
             src="<?php the_field('rando_2'); ?>" alt="Family decorating tree">
        <img class="hidden lg:block absolute right-1/2 bottom-3 z-5 w-3/12"
             src="<?php the_field('rando_3'); ?>" alt="Mom walking with child">
    </div>
    <!-- End Header -->

    <!-- Start Invite Section -->
    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">

                    <div class="col-span-12 md:col-span-4 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="<?php the_field('invite_image'); ?>"
                             alt="Girl with smiling baby">
                    </div>
                    <div class="col-span-12 md:col-span-8 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left"><?php the_field('invite_title'); ?></h2>
                            <p class="text-md mb-2"><?php the_field('invite_blurb'); ?></p>
                            <button id="two"
                                    class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                <?php the_field('button_title_1'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Invite Section -->



<?php
get_footer();

