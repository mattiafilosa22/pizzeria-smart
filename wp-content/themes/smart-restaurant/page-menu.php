<?php
/*
Template Name: Menu Page
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>

    <section class="section">
        <div class="container">
            <!-- page heading -->
            <?php include get_theme_file_path('/template-parts/page-heading.php'); ?>

            <?php
            // Ottieni tutte le categorie di pizza
            $pizza_categories = get_terms(array(
                'taxonomy' => 'pizza_category',
                'hide_empty' => false,
            ));
            ?>
            <div class="accordion" id="accordionExample">

                <?php if (!empty($pizza_categories) && !is_wp_error($pizza_categories)) :
                    foreach ($pizza_categories as $category) :
                        $pizzas = pizzeria_egidio_get_pizzas($category->slug);
                        if ($pizzas->have_posts()) :
                ?>
                            <div class="accordion-item menu-category fade-in-up">
                                <h2 class="accordion-header" id="heading-<?php echo esc_attr($category->term_id); ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-<?php echo esc_attr($category->term_id); ?>"
                                        aria-expanded="false" aria-controls="collapse-<?php echo esc_attr($category->term_id); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </button>
                                </h2>

                                <div id="collapse-<?php echo esc_attr($category->term_id); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading-<?php echo esc_attr($category->term_id); ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <?php if ($category->description) : ?>
                                            <p class="category-description"><?php echo esc_html($category->description); ?></p>
                                        <?php endif; ?>

                                        <div class="menu-items">
                                            <?php while ($pizzas->have_posts()) : $pizzas->the_post(); ?>
                                                <div class="menu-item">
                                                    <div class="menu-item-info">
                                                        <h4><?php the_title(); ?></h4>
                                                        <?php if (get_the_excerpt()) : ?>
                                                            <p class="menu-item-description"><?php echo get_the_excerpt(); ?></p>
                                                        <?php endif; ?>
                                                        <p class="menu-item-ingredients">
                                                            <?php echo esc_html(pizzeria_egidio_get_pizza_ingredients(get_the_ID())); ?>
                                                        </p>
                                                    </div>
                                                    <div class="menu-item-price">
                                                        <?php echo pizzeria_egidio_get_pizza_price(get_the_ID()); ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>

                                    </div> <!-- fine accordion-body -->
                                </div> <!-- fine accordion-collapse -->
                            </div> <!-- fine accordion-item -->

                    <?php
                            wp_reset_postdata();
                        endif;
                    endforeach;
                endif;?>
            </div>


        <div class="text-center mt-4">
            <p class="menu-footer-note">
                <i class="bi bi-leaf text-primary"></i>
                Tutti i nostri ingredienti sono selezionati con cura dai migliori fornitori locali.
                <br>
                <i class="bi bi-telephone text-primary"></i>
                Per prenotazioni chiamare il <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', '+39 0565 123456'))); ?>"><?php echo esc_html(get_theme_mod('contact_phone', '+39 0565 123456')); ?></a>
            </p>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>