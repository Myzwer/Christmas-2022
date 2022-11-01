<?php
/**
 * Template Name: Photos Page
 *
 * The Photos page of the letitsnow Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>

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

    <div class="bg-white">
        <div class="p-4 md:p-10 lg:max-w-4xl lg:text-center lg:mx-auto max-w-2xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 p-5">
                    <h2 class="text-2xl text-center mb-2 uppercase"><?php the_field('instructions_title'); ?></h2>
                </div>

                <div class="col-span-12 md:col-span-6 mb-7">
                    <h3 class="text-4xl mb-5 text-center mx-2">1</h3>
                    <hr>
                    <h4 class="text-2xl mt-3 capitalize text-center md:text-left mx-2 font-black"><?php the_field('step_1_title'); ?></h4>
                    <p class="mx-2 text-center md:text-left"><?php the_field('step_1_description'); ?></p>
                </div>

                <div class="col-span-12 md:col-span-6 mb-7">
                    <h3 class="text-4xl mb-5 text-center mx-2">2</h3>
                    <hr>
                    <h4 class="text-2xl mt-3 capitalize text-center md:text-left mx-2 font-black"><?php the_field('step_2_title'); ?></h4>
                    <p class="mx-2 text-center md:text-left"><?php the_field('step_2_description'); ?></p>
                    <div class="mx-2 text-left text-3xl">
                        <a href="https://www.facebook.com/foothillschurchTN" aria-label="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/foothillschurchtn/?hl=en" aria-label="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class = "text-center text-xl font-bold"><?php the_field('available'); ?></h3>
        <div class="tab">
            <div class="p-4 md:p-10 lg:max-w-6xl lg:text-center lg:mx-auto max-w-2xl">
                <div class="grid grid-cols-12 gap-4">
                    <?php
                    // Start the Repeater Loop
                    if (have_rows('photos')):
                        // Card Start
                        // Begin looping data
                        while (have_rows('photos')) : the_row();
                            ?>
                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <img src="<?php the_sub_field('image'); ?>"
                                     alt="A Foothills Christmas Familly Photo">
                                <a href="<?php the_sub_field('image'); ?>" download>
                                    <div class="text-left pt-2"><i class="fas fa-download"></i> Click to Download</div>
                                </a>
                            </div>
                        <?php
                        endwhile;
                    else :
                        ?>
                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
