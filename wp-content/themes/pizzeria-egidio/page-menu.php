<?php
/*
Template Name: Menu Page
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>
    
    <section class="section">
        <div class="container">
            <div class="text-center mb-4 fade-in-up">
                <h1>Il Nostro Menù</h1>
                <p class="lead">Tutte le nostre pizze sono realizzate con il nostro esclusivo impasto a lunga lievitazione e farine selezionate.</p>
                <div class="menu-note">
                    <i class="fas fa-info-circle text-primary"></i>
                    <span>Impasto a lievitazione naturale di 72 ore - Altamente digeribile</span>
                </div>
            </div>

            <?php
            // Ottieni tutte le categorie di pizza
            $pizza_categories = get_terms(array(
                'taxonomy' => 'pizza_category',
                'hide_empty' => false,
            ));

            if (!empty($pizza_categories) && !is_wp_error($pizza_categories)) :
                foreach ($pizza_categories as $category) :
                    $pizzas = pizzeria_egidio_get_pizzas($category->slug);
                    if ($pizzas->have_posts()) :
            ?>
                        <div class="menu-category fade-in-up">
                            <h2><?php echo esc_html($category->name); ?></h2>
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
                                            <p class="menu-item-ingredients"><?php echo esc_html(pizzeria_egidio_get_pizza_ingredients(get_the_ID())); ?></p>
                                        </div>
                                        <div class="menu-item-price">
                                            <?php echo pizzeria_egidio_get_pizza_price(get_the_ID()); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
            <?php
                        wp_reset_postdata();
                    endif;
                endforeach;
            else :
                // Menu di fallback se non ci sono categorie definite
            ?>
                <div class="menu-category fade-in-up">
                    <h2>Le Nostre Pizze Classiche</h2>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Margherita</h4>
                                <p class="menu-item-description">La pizza per eccellenza, semplice e genuina</p>
                                <p class="menu-item-ingredients">Pomodoro San Marzano, Mozzarella fior di latte, Basilico fresco</p>
                            </div>
                            <div class="menu-item-price">10 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Marinara</h4>
                                <p class="menu-item-description">Tradizione napoletana nella sua forma più pura</p>
                                <p class="menu-item-ingredients">Pomodoro San Marzano, Aglio, Origano, Basilico</p>
                            </div>
                            <div class="menu-item-price">8 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Napoli</h4>
                                <p class="menu-item-description">Il sapore intenso del mare</p>
                                <p class="menu-item-ingredients">Pomodoro, Mozzarella, Alici, Capperi, Origano</p>
                            </div>
                            <div class="menu-item-price">13 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Prosciutto e Funghi</h4>
                                <p class="menu-item-description">Un grande classico sempre apprezzato</p>
                                <p class="menu-item-ingredients">Pomodoro, Mozzarella, Prosciutto cotto, Funghi porcini</p>
                            </div>
                            <div class="menu-item-price">12 €</div>
                        </div>
                    </div>
                </div>

                <div class="menu-category fade-in-up">
                    <h2>Le Nostre Pizze Speciali</h2>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Pizza Egidio</h4>
                                <p class="menu-item-description">La nostra pizza signature: un omaggio al fondatore</p>
                                <p class="menu-item-ingredients">Pomodoro confit, Pecorino toscano, Salsiccia di Cinta Senese, Rucola</p>
                            </div>
                            <div class="menu-item-price">18 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Mediterranea</h4>
                                <p class="menu-item-description">Un tuffo nei sapori della nostra costa</p>
                                <p class="menu-item-ingredients">Pomodorini gialli, Alici di Cetara, Olive taggiasche, Origano</p>
                            </div>
                            <div class="menu-item-price">15 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Toscana</h4>
                                <p class="menu-item-description">I sapori autentici della nostra terra</p>
                                <p class="menu-item-ingredients">Crema di zucca, Pecorino stagionato, Speck, Noci, Miele</p>
                            </div>
                            <div class="menu-item-price">16 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Bufalina</h4>
                                <p class="menu-item-description">La regina delle pizze bianche</p>
                                <p class="menu-item-ingredients">Mozzarella di bufala DOP, Pomodorini del Piennolo, Basilico</p>
                            </div>
                            <div class="menu-item-price">17 €</div>
                        </div>
                    </div>
                </div>

                <div class="menu-category fade-in-up">
                    <h2>Antipasti</h2>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Tagliere Toscano</h4>
                                <p class="menu-item-description">Selezione di salumi e formaggi del territorio</p>
                                <p class="menu-item-ingredients">Prosciutto toscano, Finocchiona, Pecorino, Miele, Confettura</p>
                            </div>
                            <div class="menu-item-price">14 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Bruschette della Casa</h4>
                                <p class="menu-item-description">Pane tostato con condimenti freschi</p>
                                <p class="menu-item-ingredients">Pomodoro e basilico, Burrata e crudo, Ricotta e miele</p>
                            </div>
                            <div class="menu-item-price">8 €</div>
                        </div>
                    </div>
                </div>

                <div class="menu-category fade-in-up">
                    <h2>Bevande</h2>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Birra alla Spina</h4>
                                <p class="menu-item-description">Media - Grande</p>
                                <p class="menu-item-ingredients">Birra artigianale locale</p>
                            </div>
                            <div class="menu-item-price">4 € - 6 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Vino della Casa</h4>
                                <p class="menu-item-description">Calice - Bottiglia</p>
                                <p class="menu-item-ingredients">Rosso o Bianco - Selezione locale</p>
                            </div>
                            <div class="menu-item-price">4 € - 18 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Bibite</h4>
                                <p class="menu-item-description">Analcoliche varie</p>
                                <p class="menu-item-ingredients">Coca Cola, Aranciata, Acqua naturale/frizzante</p>
                            </div>
                            <div class="menu-item-price">3 €</div>
                        </div>
                    </div>
                </div>

                <div class="menu-category fade-in-up">
                    <h2>Dolci</h2>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Tiramisù della Casa</h4>
                                <p class="menu-item-description">Il classico dolce al cucchiaio, fatto in casa</p>
                                <p class="menu-item-ingredients">Mascarpone, Caffè, Savoiardi, Cacao</p>
                            </div>
                            <div class="menu-item-price">6 €</div>
                        </div>
                        
                        <div class="menu-item">
                            <div class="menu-item-info">
                                <h4>Panna Cotta ai Frutti di Bosco</h4>
                                <p class="menu-item-description">Dolcezza delicata con salsa ai frutti di bosco</p>
                                <p class="menu-item-ingredients">Panna, Vaniglia, Frutti di bosco freschi</p>
                            </div>
                            <div class="menu-item-price">5 €</div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="text-center mt-4">
                <p class="menu-footer-note">
                    <i class="fas fa-leaf text-primary"></i>
                    Tutti i nostri ingredienti sono selezionati con cura dai migliori fornitori locali.
                    <br>
                    <i class="fas fa-phone text-primary"></i>
                    Per prenotazioni chiamare il <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', '+39 0565 123456'))); ?>"><?php echo esc_html(get_theme_mod('contact_phone', '+39 0565 123456')); ?></a>
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>