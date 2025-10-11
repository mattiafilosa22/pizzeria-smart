<?php
/*
Template Name: La Nostra Storia
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>

    <section class="section">
        <div class="container">
            <!-- Section Header -->
            <?php include get_template_directory() . '/template-parts/page-heading.php'; ?>

            <div class="story-content">
                <!-- Story paragraph -->
                <?php include get_template_directory() . '/template-parts/story-paragraph.php'; ?>

                <!-- Story paragraph 2 -->
                <?php include get_template_directory() . '/template-parts/story-paragraph-2.php'; ?>

                <!-- Text ctas -->
                <?php include get_template_directory() . '/template-parts/text-cta.php'; ?>

                <!-- Stepper Pizza Process -->
                <?php include get_template_directory() . '/template-parts/stepper-pizza.php'; ?>
                <!-- End Stepper Pizza Process -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>