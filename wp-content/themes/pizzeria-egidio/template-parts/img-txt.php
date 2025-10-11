<?php
$img_txt_title = get_field('img_txt_title');
$img_txt_title_gold = get_field('img_txt_title_gold');
$img_txt_description = get_field('img_txt_description');
$img_pizza_section = get_field('img_txt_img');
$img_pizza_section_position = get_field('img_txt_position');
$step = get_field('step');
$img_txt_step_txt_1 = $step['img_txt_step_txt_1'];
$img_txt_step_txt_2 = $step['img_txt_step_txt_2'];
$img_txt_step_txt_3 = $step['img_txt_step_txt_3'];
$img_txt_step_txt_4 = $step['img_txt_step_txt_4'];
?>

<section class="section section-alt" id="pizza-section">
  <div class="container">
    <div class="pizza-special fade-in-up">
      <div class="pizza-special-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-impasto.jpg" alt="Il nostro impasto speciale" />
      </div>
      <div class="pizza-special-content">
        <h2><?= esc_html($img_txt_title_gold); ?><span class="text-primary"><?= esc_html($img_txt_title); ?></span></h2>
        <p class="lead"><?= esc_html($img_txt_description); ?></p>
        <ul class="pizza-features">
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_1); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_2); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_3); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_4); ?></li>
        </ul>
        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-primary">Scopri le Nostre Pizze</a>
      </div>
    </div>
  </div>
</section>