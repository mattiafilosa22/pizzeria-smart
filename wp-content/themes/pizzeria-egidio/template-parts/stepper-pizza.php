<?php
$stepper_pizza_title = get_field('stepper_pizza_title');
$stepper_pizza_title_gold = get_field('stepper_pizza_title_gold');
$stepper_pizza_description = get_field('stepper_pizza_description');
$stepper_content_image = get_field('stepper_content_image');
$stepper_content_title_1 = get_field('stepper_content_title_1');
$stepper_content_text_1 = get_field('stepper_content_text_1');
$stepper_content_title_2 = get_field('stepper_content_title_2');
$stepper_content_text_2 = get_field('stepper_content_text_2');
$stepper_content_title_3 = get_field('stepper_content_title_3');
$stepper_content_text_3 = get_field('stepper_content_text_3');
$stepper_content_title_4 = get_field('stepper_content_title_4');
$stepper_content_text_4 = get_field('stepper_content_text_4');
?>

<div class="pizza-special fade-in-up">
  <div class="pizza-special-image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-making.jpg" alt="La preparazione delle nostre pizze" />
  </div>
  <div class="pizza-special-content">
    <h2><?php echo esc_html($stepper_pizza_title); ?> <span class="text-primary"><?php echo esc_html($stepper_pizza_title_gold); ?></span></h2>
    <p class="lead"><?php echo esc_html($stepper_pizza_description); ?></p>

    <div class="process-steps">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4><?php echo esc_html($stepper_content_title_1); ?></h4>
          <p><?php echo esc_html($stepper_content_text_1); ?></p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4><?php echo esc_html($stepper_content_title_2); ?></h4>
          <p><?php echo esc_html($stepper_content_text_2); ?></p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4><?php echo esc_html($stepper_content_title_3); ?></h4>
          <p><?php echo esc_html($stepper_content_text_3); ?></p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4><?php echo esc_html($stepper_content_title_4); ?></h4>
          <p><?php echo esc_html($stepper_content_text_4); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>