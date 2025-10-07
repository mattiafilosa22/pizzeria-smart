<?php get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>
    
    <section class="section">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <article class="page-content fade-in-up">
                    <header class="page-header text-center mb-4">
                        <h1><?php the_title(); ?></h1>
                        <?php if (get_the_excerpt()) : ?>
                            <p class="lead"><?php echo get_the_excerpt(); ?></p>
                        <?php endif; ?>
                    </header>
                    
                    <div class="page-body">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pagine:', 'pizzeria-egidio'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                    
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <div class="comments-section">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>