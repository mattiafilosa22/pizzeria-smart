<?php
/*
Template Name: Home
*/
get_header(); ?>

<main class="main-content">
    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-content fade-in-up">
                <h1><?php echo esc_html(get_theme_mod('hero_title', 'Pizzeria Egidio')); ?></h1>
                <p class="hero-tagline accent-font"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Tradizione nel nome, innovazione nel piatto')); ?></p>
                <p class="hero-description"><?php echo esc_html(get_theme_mod('hero_description', 'Nel cuore di Piombino, dove la tradizione incontra l\'innovazione per offrirti la pizza più buona e digeribile della città.')); ?></p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url(get_theme_mod('hero_button_url', '#menu')); ?>" class="btn btn-primary btn-medium">
                        <?php echo esc_html(get_theme_mod('hero_button_text', 'Scopri il Menù')); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="btn btn-secondary btn-medium">
                        Prenota il tuo Tavolo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Chi Siamo (Teaser) -->
    <section class="section">
        <div class="container">
            <div class="about-teaser text-center fade-in-up">
                <h2>Tradizione nel nome, innovazione nel piatto</h2>
                <p class="lead">C'era una volta Egidio, un nome che ha fatto la storia della ristorazione piombinese. Oggi portiamo avanti questa tradizione con una visione moderna: ingredienti selezionati, impasto a lunga lievitazione e un'atmosfera unica nel cuore di Piombino.</p>
                <p class="second-lead">Ogni pizza racconta una storia di passione, qualità e innovazione. Scopri il nostro viaggio dalle origini storiche alla moderna eccellenza culinaria.</p>
                <a href="<?php echo esc_url(home_url('/la-nostra-storia/')); ?>" class="btn btn-primary">La Nostra Storia Completa</a>
            </div>
        </div>
    </section>

    <!-- La Nostra Pizza -->
    <section class="section section-alt" id="pizza-section">
        <div class="container">
            <div class="pizza-special fade-in-up">
                <div class="pizza-special-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-impasto.jpg" alt="Il nostro impasto speciale" />
                </div>
                <div class="pizza-special-content">
                    <h2>Il nostro segreto? <span class="text-primary">Una farina speciale</span></h2>
                    <p class="lead">Il cuore della nostra pizza è l'impasto: 72 ore di lievitazione naturale con farine selezionate e macinate a pietra. Un processo che rende la nostra pizza incredibilmente digeribile e dal sapore unico.</p>
                    <ul class="pizza-features">
                        <li><i class="bi bi-check-circle text-primary"></i> Lievitazione naturale di 72 ore</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Farine macinate a pietra</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Ingredienti selezionati dal territorio</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Altamente digeribile</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-primary">Scopri le Nostre Pizze</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Assaggi dal Menù -->
    <section class="section" id="menu">
        <div class="container">
            <div class="text-center mb-4 fade-in-up">
                <h2>Assaggi dal Menù</h2>
                <p class="lead">Scopri alcune delle nostre pizze speciali, quelle che ci rappresentano di più</p>
            </div>

            <div class="grid grid-3 fade-in-up">
                <?php
                $special_pizzas = pizzeria_egidio_get_pizzas('', 3, true);
                if ($special_pizzas->have_posts()) :
                    while ($special_pizzas->have_posts()) : $special_pizzas->the_post();
                ?>
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('card-image'); ?>" alt="<?php the_title_attribute(); ?>" class="card-image">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-placeholder.jpg" alt="<?php the_title_attribute(); ?>" class="card-image">
                        <?php endif; ?>
                        <div class="card-content">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-description"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <p class="card-ingredients"><strong>Ingredienti:</strong> <?php echo esc_html(pizzeria_egidio_get_pizza_ingredients(get_the_ID())); ?></p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
                                <span class="card-price"><?php echo pizzeria_egidio_get_pizza_price(get_the_ID()); ?></span>
                                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-secondary">Vedi Menu</a>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <!-- Pizze di esempio se non ci sono pizze speciali -->
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-margherita.jpg" alt="Pizza Margherita" class="card-image">
                        <div class="card-content">
                            <h3 class="card-title">Margherita Speciale</h3>
                            <p class="card-description">La nostra interpretazione del classico: pomodoro San Marzano, mozzarella di bufala campana, basilico fresco.</p>
                            <p class="card-ingredients"><strong>Ingredienti:</strong> Pomodoro San Marzano, Mozzarella di bufala, Basilico fresco</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
                                <span class="card-price">12 €</span>
                                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-secondary">Vedi Menu</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-mediterranea.jpg" alt="Pizza Mediterranea" class="card-image">
                        <div class="card-content">
                            <h3 class="card-title">Mediterranea</h3>
                            <p class="card-description">Un tuffo nei sapori della nostra costa, con pomodorini gialli dolci e alici di Cetara.</p>
                            <p class="card-ingredients"><strong>Ingredienti:</strong> Pomodorini gialli, Alici di Cetara, Olive taggiasche, Origano</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
                                <span class="card-price">15 €</span>
                                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-secondary">Vedi Menu</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-egidio.jpg" alt="Pizza Egidio" class="card-image">
                        <div class="card-content">
                            <h3 class="card-title">Pizza Egidio</h3>
                            <p class="card-description">La nostra pizza signature: un omaggio al fondatore con ingredienti del territorio toscano.</p>
                            <p class="card-ingredients"><strong>Ingredienti:</strong> Pomodoro confit, Pecorino toscano, Salsiccia di Cinta Senese, Rucola</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
                                <span class="card-price">18 €</span>
                                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-secondary">Vedi Menu</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-primary btn-medium">Vedi Menu Completo</a>
            </div>
        </div>
    </section>

    <!-- L'Atmosfera -->
    <section class="section section-alt">
        <div class="container">
            <div class="pizza-special fade-in-up">
                <div class="pizza-special-content">
                    <h2>Un'atmosfera unica <span class="text-primary">nel cuore di Piombino</span></h2>
                    <p class="lead">Il nostro locale unisce il calore della tradizione italiana all'eleganza del design moderno. Uno spazio accogliente dove ogni dettaglio è pensato per il vostro comfort.</p>
                    <ul class="pizza-features">
                        <li><i class="bi bi-check-circle text-primary"></i> Ambiente moderno e accogliente</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Design curato nei minimi dettagli</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Perfetto per cene romantiche e di famiglia</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Nel centro storico di Piombino</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="btn btn-primary">Prenota il tuo Tavolo</a>
                </div>
                <div class="pizza-special-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locale-interno.jpg" alt="Interno del nostro locale" />
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>