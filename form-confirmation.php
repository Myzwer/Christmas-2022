<?php
/**
 * Template Name: Form Confirmation
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Pre_Launch_WP
 * @since 1.0.0
 */

get_header(); ?>


    <div class="block grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-left md:text-center m-5">
            <div class="md:text-left md:mx-10">
                <h1 class="uppercase text-3xl mb-3 md:mt-16">Thank you for filling out our form!</h1>
                <h2 class="font-bold text-lg">You can click the button below to download your resource!</h2>
                <p class="text-sm">(We also sent it to your email so you don't lose it)</p>
                <div class="md:mt-5">
                    <?php if (have_rows('download_button')): ?>
                        <?php while (have_rows('download_button')): the_row(); ?>
                            <a download
                               href="<?php the_sub_field('button_download'); ?>">
                                <button class="mx-auto lg:mx-0 bg-yellow text-black font-bold rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('back_button')): ?>
                        <?php while (have_rows('back_button')): the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>">
                                <button class="mx-auto lg:mx-0 border-black border-2 text-black font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <?php the_sub_field('button_text'); ?>
                                </button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                    rgba(0, 0, 0, 0.45),
                    rgba(0, 0, 0, 0.45)
                    ), url('<?php the_field('background_image'); ?>') no-repeat bottom center scroll; background-size: cover; height: 80vh;">
            </div>
        </div>
    </div>


<?php get_footer();
