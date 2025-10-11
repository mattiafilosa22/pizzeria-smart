<?php
// BEGIN Hero banner
$title_hero = get_field('title_hero');
$subtitle_hero = get_field('subtitle_hero');
$description_hero = get_field('description_hero');
$left_button_hero = get_field('left_button_hero');
$right_button_hero = get_field('right_button_hero');
$left_button_hero_text = is_array($left_button_hero) ? ($left_button_hero['title'] ?? '') : $left_button_hero;
$left_button_hero_url = is_array($left_button_hero) ? ($left_button_hero['url'] ?? '') : $left_button_hero;
$right_button_hero_text = is_array($right_button_hero) ? ($right_button_hero['title'] ?? '') : $right_button_hero;
$right_button_hero_url = is_array($right_button_hero) ? ($right_button_hero['url'] ?? '') : $right_button_hero;
$background_image_hero = get_field('background_image_hero');
$background_image_hero_src = $background_image_hero ? $background_image_hero['url'] : get_template_directory_uri() . '/assets/images/default-hero.jpg';
?>

<!-- Hero Banner -->
<section class="hero-banner has-bg-image" style="background-image: url('<?php echo esc_url($background_image_hero_src); ?>');">
    <div class="container">
        <div class="hero-content fade-in-up">
            <h1><?php echo esc_html( get_theme_mod('hero_title', $title_hero) ); ?></h1>
            <p class="hero-tagline accent-font"><?php echo esc_html( $subtitle_hero ); ?></p>
            <p class="hero-description"><?php echo esc_html( $description_hero ); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url($left_button_hero_url); ?>" class="btn btn-primary btn-medium">
                    <?php echo esc_html($left_button_hero_text); ?>
                </a>
                <a href="<?php echo esc_url($right_button_hero_url); ?>" class="btn btn-secondary btn-medium">
                    <?php echo esc_html($right_button_hero_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>