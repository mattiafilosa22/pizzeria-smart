<?php
$text_cards_heading = get_field('text_cards_heading');
$text_cards_description = get_field('text_cards_description');
?>
<section class="section" id="menu">
  <div class="container">
    <div class="text-center mb-4 fade-in-up">
      <h2><?php echo esc_html($text_cards_heading); ?></h2>
      <p class="lead"><?php echo esc_html($text_cards_description); ?></p>
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