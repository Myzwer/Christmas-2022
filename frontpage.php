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
            <h1 class="uppercase text-red text-2xl md:text-3xl py-5 px-10 z-5"><?php the_field('tagline'); ?></h1>
        </div>
        <img class="hidden lg:block absolute left-36 bottom-3 z-5"
             src="<?php the_field('rando_1'); ?>" alt="Man with boxes">
        <img class="hidden lg:block absolute right-36 bottom-3 z-5"
             src="<?php the_field('rando_2'); ?>" alt="Female with Box and bag">
    </div>
    <!-- End Header -->

    <!-- Start Detail Cards -->
    <div class="bg-no-repeat bg-scroll bg-cover relative pb-10" style="background:
            url('<?php the_field('card_background'); ?>') no-repeat bottom center scroll; background-size: cover; ">
        <div class="grid grid-cols-12 gap-4 lg:gap-4 lg:w-8/12 mx-4 lg:mx-auto pt-10 text-white">
            <?php if (have_rows('maryville_card')): ?>
                <?php while (have_rows('maryville_card')): the_row(); ?>
                    <div class="col-span-12 xl:col-span-6 bg-red rounded-lg shadow-xl p-4 z-5">
                        <div class="border-2 rounded-md">
                            <div class="text-left uppercase p-2">
                                <h2 class=" text-xl text-center pb-5"><?php the_sub_field('top_title'); ?></h2>
                                <p class="font-light"> <?php the_sub_field('tagline'); ?></p>
                            </div>
                            <div class="text-center mb-5">
                                <div class="inline lg:pr-2">
                                    <a href="<?php the_sub_field('btn_1_link'); ?>">
                                        <button
                                                class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('btn_1_text'); ?>
                                        </button>
                                    </a>
                                </div>
                                <div class="inline">
                                    <a href="<?php the_sub_field('btn_2_link'); ?>">
                                        <button
                                                class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('btn_2_text'); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('bearden_card')): ?>
                <?php while (have_rows('bearden_card')): the_row(); ?>
                    <div class="col-span-12 xl:col-span-6 bg-green rounded-lg shadow-xl p-4 z-5">
                        <div class="border-2 rounded-md">
                            <div class="text-left uppercase p-2">
                                <h2 class=" text-xl text-center pb-5"><?php the_sub_field('top_title'); ?></h2>
                                <p class="font-light"> <?php the_sub_field('tagline'); ?></p>
                            </div>
                            <div class="text-center mb-5">
                                <div class="inline">
                                    <a href="<?php the_sub_field('btn_2_link'); ?>">
                                        <button
                                                class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                            <?php the_sub_field('btn_2_text'); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Detail Cards -->

    <!-- Start Christmas Eve -->
    <div class="bg-red p-5 relative">
        <div class="lg:w-11/12 xl:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">
                    <div class="col-span-12 lg:col-span-6 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-large">
                            <h2 class="text-lg md:text-2xl lg:text-3xl uppercase font-black text-left"><?php the_field('ce_title'); ?></h2>
                            <p class="text-md"><?php the_field('ce_information'); ?></p>
                            <a href="<?php the_field('btn_link'); ?>">
                                <button
                                        class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                    <?php the_field('btn_text'); ?>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-6 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="<?php the_field('ce_photo'); ?>"
                             alt="Christmas Eve Online Screenshot">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Christmas Eve -->

    <!-- Start Form -->
    <div class="bg-white relative">
        <div class="lg:w-7/12 mx-auto relative min-height-form ">
            <img class="absolute tree-girl"
                 src="<?php the_field('form_rando'); ?>" alt="Girl Carrying Tree">
            <div class="grid grid-cols-12 gap-4 mx-2 text-black">
                <div class="col-span-12 md:col-span-8 px-4 pt-4 text-left">
                    <h2 class="uppercase text-3xl lg:text-4xl"><?php the_field('form_title'); ?></h2>
                    <p class="capitalize text-lg lg:text-xl"><?php the_field('form_subtitle'); ?></p>
                </div>

                <div class="col-start-5 col-span-10 md:col-start-1 md:col-span-6 p-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->

    <!-- Start Footer Cards-->

    <!-- End Footer Cards -->


<?php
get_footer();