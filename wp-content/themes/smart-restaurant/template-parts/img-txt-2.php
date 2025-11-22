<?php
$img_txt_title_2 = get_field('img_txt_title_2');
$img_txt_title_gold_2 = get_field('img_txt_title_gold_2');
$img_txt_description_2 = get_field('img_txt_description_2');
$img_txt_img_2 = get_field('img_txt_img_2');
$img_txt_position_2 = get_field('img_txt_position_2');
$img_step_group = get_field('step_2');
$img_txt_step_txt_1_2 = $img_step_group['img_txt_step_txt_1_2'];
$img_txt_step_txt_2_2 = $img_step_group['img_txt_step_txt_2_2'];
$img_txt_step_txt_2_3 = $img_step_group['img_txt_step_txt_2_3'];
$img_txt_step_txt_2_4 = $img_step_group['img_txt_step_txt_2_4'];
$image = get_field('img_txt_img_2');
$image_url = $image['url'];
?>

<section class="section section-alt">
  <div class="container">
    <div class="pizza-special fade-in-up">
      <div class="pizza-special-content">
        <h2><?= esc_html($img_txt_title_gold_2); ?> <span class="text-primary"><?= esc_html($img_txt_title_2); ?></span></h2>
        <p class="lead"><?= esc_html($img_txt_description_2); ?></p>
        <ul class="pizza-features">
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_1_2); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_2_2); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_2_2); ?></li>
          <li><i class="bi bi-check-circle text-primary"></i> <?= esc_html($img_txt_step_txt_2_2); ?></li>
        </ul>
        <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="btn btn-primary">Prenota il tuo Tavolo</a>
      </div>
      <div class="pizza-special-image">
        <img src="<?php echo esc_url($image_url); ?>" alt="Interno del nostro locale" />
      </div>
    </div>
  </div>
</section>