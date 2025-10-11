<?php
$title_cta_text = get_field('text_cta_title');
$title_gold_cta_text = get_field('text_cta_title_gold');
$description_cta_text = get_field('text_cta_description');
$button_left_cta = get_field('text_cta_left_link');
$button_left_cta_text = is_array($button_left_cta) ? ($button_left_cta['title'] ?? '') : $button_left_cta;
$button_left_cta_url = is_array($button_left_cta) ? ($button_left_cta['url'] ?? '') : $button_left_cta;
$button_right_cta = get_field('text_cta_right_link');
$button_right_cta_text = is_array($button_right_cta) ? ($button_right_cta['title'] ?? '') : $button_right_cta;
$button_right_cta_url = is_array($button_right_cta) ? ($button_right_cta['url'] ?? '') : $button_right_cta;
$background_grey = get_field('text_cta_background_grey');
?>

<section class="section">
  <div class="container">
    <div class="about-teaser text-center fade-in-up">
      <h2><?= esc_html($title_cta_text); ?><span class="text-primary"><br /><?= esc_html($title_gold_cta_text); ?></span></h2>
      <div class="lead"><?php echo function_exists( 'wp_kses_post' ) ? wp_kses_post( $description_cta_text ) : $description_cta_text; ?></div>
      <a href="<?php echo esc_url($button_left_cta_url); ?>" class="btn btn-primary"><?= esc_html($button_left_cta_text); ?></a>
      <?php if ( $button_right_cta_url ) : ?>
      <a href="<?php echo esc_url($button_right_cta_url); ?>" class="btn btn-secondary ms-3"><?= esc_html($button_right_cta_text); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>