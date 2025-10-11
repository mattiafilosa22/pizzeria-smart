<?php
$title_story = get_field('title_story');
$title_story_gold = get_field('title_story_gold');
$text_story = get_field('text_story');
$image_story = get_field('image_story');
?>

<div class="pizza-special fade-in-up">
  <div class="pizza-special-image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/storia-egidio-vintage.jpg" alt="Foto storica di Egidio" />
  </div>
  <div class="pizza-special-content">
    <h2><span class="accent-font"><?php echo esc_html($title_story_gold); ?></span> <?php echo esc_html($title_story); ?></h2>
    <div class="lead"><?php echo function_exists( 'wp_kses_post' ) ? wp_kses_post( $text_story ) : $text_story; ?></div>
  </div>
</div>