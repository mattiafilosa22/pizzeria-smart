<?php
/*
Template Name: Contatti
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>

    <section class="section">
        <div class="container">
            <!-- page heading -->
            <?php include get_template_directory() . '/template-parts/page-heading.php'; ?>

            <!-- Layout Contatti -->
            <?php include get_template_directory() . '/pages/page-contacts.php'; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>