<?php
$title = get_field('title_page_heading');
$text = get_field('text_page_heading');
$disclaimer = get_field('disclaimer');
?>

<div class="text-center mb-4 fade-in-up">
  <h1><?php echo esc_html($title); ?></h1>
  <p class="lead"><?php echo esc_html($text); ?></p>
  <div class="menu-note">
    <i class="bi bi-info-circle text-primary"></i>
    <span><?php echo esc_html($disclaimer); ?></span>
  </div>
</div>