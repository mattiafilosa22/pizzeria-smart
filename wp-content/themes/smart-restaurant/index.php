<?php
/*
Template Name: Home
*/
get_header();

?>

<main class="main-content">
    <!-- Hero Banner -->
    <?php include get_template_directory() . '/template-parts/hero-banner.php'; ?>

    <!-- Chi Siamo (Teaser) -->
    <?php include get_template_directory() . '/template-parts/text-cta.php'; ?>

    <!-- La Nostra Pizza -->
    <?php include get_template_directory() . '/template-parts/img-txt.php'; ?>

    <!-- Assaggi dal Menù -->
    <?php include get_template_directory() . '/template-parts/title-cards-heading.php'; ?>

    <!-- L'Atmosfera -->
    <?php include get_template_directory() . '/template-parts/img-txt-2.php'; ?>
</main>

<?php get_footer(); ?>