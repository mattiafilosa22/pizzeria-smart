<?php
$iframesrc = get_field('iframe_src');
$where_group = get_field('where_group');
$where_title = $where_group['where_title'];
$where_subtitle = $where_group['where_subtitle'];
$where_paragraph = $where_group['where_paragraph'];
$where_auto = $where_group['where_auto'];
$where_bus = $where_group['where_bus'];
$where_training = $where_group['where_training'];

$opening_hours = get_field('opening_hours');
$opening_hours_op = $opening_hours['opening_hours_op'];
$opening_hours_txt = $opening_hours['opening_hours_txt'];

$contacts = get_field('contacts');
$contacts_phone = $contacts['contacts_phone'];
$contacts_email = $contacts['contacts_email'];

$reservations = get_field('reservations');
$reservation_title = $reservations['reservation_title'];
$reservation_text = $reservations['reservation_text'];
$reservation_phone = $reservations['reservation_phone'];

$reservation_policy = $reservations['reservation_policy'];
$reservation_policy_title = $reservation_policy['reservation_policy_title'];
$reservation_policy_title_2 = $reservation_policy['reservation_policy_title_2'];
$reservation_policy_title_3 = $reservation_policy['reservation_policy_title_3'];
$reservation_policy_title_4 = $reservation_policy['reservation_policy_title_4'];

$social = get_field('social');
$title_social = $social['title_social'];
$description_social = $social['description_social'];
?>

<div class="contact-layout">
  <!-- Mappa -->
  <div class="contact-section fade-in-up">
    <div class="map-container">
      <!-- Sostituisci con il vero indirizzo della pizzeria -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.1234567890123!2d10.5276!3d42.9258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDU1JzMzLjAiTiAxMMKwMzEnMzkuNCJF!5e0!3m2!1sit!2sit!4v1234567890123!5m2!1sit!2sit" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <!-- Informazioni di contatto -->
  <div class="contact-grid grid grid-2 fade-in-up">
    <?php if ($where_title): ?>
    <div class="contact-info">
      <h2><i class="bi bi-geo-alt text-primary"></i> <?php echo esc_html($where_title); ?></h2>

      <?php if ($where_subtitle): ?>
      <p class="contact-address">
        <strong><?php echo esc_html(get_theme_mod('contact_address', $where_subtitle)); ?></strong>
      </p>
      <?php endif; ?>

      <?php if ($where_paragraph): ?>
      <p class="lead"><?php echo esc_html($where_paragraph); ?></p>
      <?php endif; ?>

      <?php if ($where_auto || $where_bus || $where_training): ?>
        <div class="contact-directions">
          <h4>Come Raggiungerci:</h4>
          <div>
            <?php if ($where_auto): ?>
            <p class="lead"><i class="bi bi-car-front text-primary"></i> <strong>In auto</strong><br /> <?php echo esc_html($where_auto); ?></p>
            <?php endif; ?>
            <?php if ($where_bus): ?>
            <p class="lead"><i class="bi bi-bus-front text-primary"></i> <strong>Con i mezzi</strong><br /> <?php echo esc_html($where_bus); ?></p>
            <?php endif; ?>
            <?php if ($where_training): ?>
            <p class="lead"><i class="bi bi-person-walking text-primary"></i> <strong>A piedi</strong><br /> <?php echo esc_html($where_training); ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <div class="contact-info">
      <h2><i class="bi bi-clock text-primary"></i> Orari di Apertura</h2>
      <div class="opening-hours-table">
        <?php
        // Martedì - Domenica: 19:00 - 23:00\nMercoledì: Chiuso
        // Prendi gli orari dalla Customizer setting, fallback al campo ACF
        $hours = get_theme_mod('opening_hours', $opening_hours_op);

        // Se la stringa contiene sequenze letterali "\n" (due caratteri: backslash + n)
        // trasformale in newline reali; normalizza anche CRLF (Windows) e CR (Mac)
        if (is_string($hours)) {
          // stripcslashes convertirà "\\n" in "\n" (carattere newline reale)
          $hours = stripcslashes($hours);
          // Normalizza ritorni a capo in LF
          $hours = str_replace(["\r\n", "\r"], "\n", $hours);
          // Splitta su ogni newline (e rimuove eventuali righe vuote)
          $hours_lines = preg_split('/\n/', $hours, -1, PREG_SPLIT_NO_EMPTY);
        } else {
          $hours_lines = [];
        }

        foreach ($hours_lines as $line) {
          if (trim($line)) {
            $parts = explode(':', $line, 2);
            if (count($parts) == 2) {
              echo '<div class="hours-row">';
              echo '<span class="day">' . trim($parts[0]) . '</span>';
              echo '<span class="time">' . trim($parts[1]) . '</span>';
              echo '</div>';
            }
          }
        }
        ?>
      </div>

      <div class="hours-note">
        <p><i class="bi bi-info-circle text-primary"></i> <strong>Nota importante:</strong> <?php echo esc_html($opening_hours_txt); ?></p>
      </div>
    </div>
  </div>

  <!-- Contatti diretti -->
  <div class="contact-grid grid grid-2 fade-in-up">
    <div class="contact-info">
      <h2><i class="bi bi-telephone text-primary"></i> Contatti Diretti</h2>

      <div class="contact-methods">
        <div class="contact-method">
          <div class="contact-icon-large">
            <i class="bi bi-telephone"></i>
          </div>
          <div class="contact-details">
            <h4>Telefono</h4>
            <p>
              <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', $contacts_phone))); ?>" class="contact-phone-link">
                <?php echo esc_html(get_theme_mod('contact_phone', $contacts_phone)); ?>
              </a>
            </p>
            <!--<small>Cliccabile da smartphone</small>-->
          </div>
        </div>
        <?php if ($contacts_email): ?>
        <div class="contact-method">
          <div class="contact-icon-large">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="contact-details">
            <h4>Email</h4>
            <p>
              <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', $contacts_email)); ?>">
                <?php echo esc_html(get_theme_mod('contact_email', $contacts_email)); ?>
              </a>
            </p>
            <small>Per informazioni generali</small>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="contact-info">
      <h2><i class="bi bi-calendar-event text-primary"></i> Prenotazioni</h2>

      <div class="reservation-info">
        <?php if($reservation_title && $reservation_text): ?>
          <div class="reservation-highlight">
            <h4><?php echo esc_html($reservation_title); ?></h4>
            <p class="lead"><?php echo esc_html($reservation_text); ?></p>
            <div class="phone-highlight">
              <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', $contacts_phone))); ?>" class="btn btn-primary btn-medium">
                <i class="bi bi-telephone"></i> <?php echo esc_html(get_theme_mod('contact_phone', $contacts_phone)); ?>
              </a>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($reservation_policy_title): ?>
          <div class="reservation-policy">
            <h4>Policy Prenotazioni</h4>
            <ul>
              <li><i class="bi bi-check-circle text-primary"></i> <strong><?php echo esc_html($reservation_policy_title); ?></strong></li>
              <li><i class="bi bi-check-circle text-primary"></i> <?php echo esc_html($reservation_policy_title_2); ?></li>
              <li><i class="bi bi-check-circle text-primary"></i> <?php echo esc_html($reservation_policy_title_3); ?></li>
              <li><i class="bi bi-check-circle text-primary"></i> <?php echo esc_html($reservation_policy_title_4); ?></li>
            </ul>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <!-- Sezione social e informazioni aggiuntive -->
  <div class="contact-extra fade-in-up">
    <div class="social-section">
      <h2><?php echo esc_html($title_social); ?></h2>
      <p><?php echo esc_html($description_social); ?></p>
      <div class="social-links-large">
        <a href="#" class="social-link facebook" aria-label="Facebook">
          <i class="bi bi-facebook"></i>
          <span>Facebook</span>
        </a>
        <a href="#" class="social-link instagram" aria-label="Instagram">
          <i class="bi bi-instagram"></i>
          <span>Instagram</span>
        </a>
        <a href="#" class="social-link tripadvisor" aria-label="TripAdvisor">
          <i class="bi bi-signpost-2"></i>
          <span>TripAdvisor</span>
        </a>
      </div>
    </div>
  </div>

</div>