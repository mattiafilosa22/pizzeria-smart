<?php
$title_story_2 = get_field('title_story_2');
$title_story_2_gold = get_field('title_story_2_gold');
$image_story_2 = get_field('image_story_2');
$group = get_field('group_story');
$text_story_2 = $group['text_story_2'];
$group_story_title = $group['group_story_title'];
$group_story_description = $group['group_story_description'];
$group_story_title_2 = $group['group_story_title_2'];
$group_story_description_2 = $group['group_story_description_2'];
$group_story_title_3 = $group['group_story_title_3'];
$group_story_description_3 = $group['group_story_description_3'];
$group_story_title_4 = $group['group_story_title_4'];
$group_story_description_4 = $group['group_story_description_4'];
$text_bottom_story = $group['text_bottom_story_2'];
$image = get_field('image_story_2');
?>

<div class="pizza-special fade-in-up">
  <div class="pizza-special-content">
    <h2><?php echo esc_html($title_story_2); ?> <span class="text-primary"><?php echo esc_html($title_story_2_gold); ?></span></h2>
  <div class="lead"><?php echo function_exists( 'wp_kses_post' ) ? wp_kses_post( $text_story_2 ) : $text_story_2; ?></div>
    <p class="lead"><?php echo esc_html($group_story_description); ?></p>
    <div class="story-features">
      <p class="lead"><i class="bi bi-flower2 text-primary"></i> <strong><?php echo esc_html($group_story_title); ?></strong><br /> <?php echo esc_html($group_story_description); ?></p>
      <p class="lead"><i class="bi bi-clock text-primary"></i> <strong><?php echo esc_html($group_story_title_2); ?></strong><br /> <?php echo esc_html($group_story_description_2); ?></p>
      <p class="lead"><i class="bi bi-house text-primary"></i> <strong><?php echo esc_html($group_story_title_3); ?></strong><br /> <?php echo esc_html($group_story_description_3); ?></p>
      <p class="lead"><i class="bi bi-heart text-primary"></i> <strong><?php echo esc_html($group_story_title_4); ?></strong><br /> <?php echo esc_html($group_story_description_4); ?></p>
    </div>

  <div class="lead"><?php echo function_exists( 'wp_kses_post' ) ? wp_kses_post( $text_bottom_story ) : $text_bottom_story; ?></div>
  </div>
  <div class="pizza-special-image">
    <img src="<?php echo esc_url($image['url']); ?>" alt="Il nostro locale oggi" />
  </div>
</div>