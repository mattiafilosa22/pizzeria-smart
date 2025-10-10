<?php
/*
Template Name: Contatti
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>

    <section class="section">
        <div class="container">
            <div class="text-center mb-4 fade-in-up">
                <h1>Contatti & Orari</h1>
                <p class="lead">Vieni a trovarci nel cuore di Piombino</p>
            </div>

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
                    <div class="contact-info">
                        <h2><i class="bi bi-geo-alt text-primary"></i> Dove Siamo</h2>
                        <p class="contact-address">
                            <strong><?php echo esc_html(get_theme_mod('contact_address', 'Via Roma 123, 57025 Piombino (LI)')); ?></strong>
                        </p>
                        <p class="lead">Nel cuore del centro storico di Piombino, a pochi passi dalle principali attrazioni della città. Il nostro locale è facilmente raggiungibile a piedi e dispone di parcheggi nelle vicinanze.</p>

                        <div class="contact-directions">
                            <h4>Come Raggiungerci:</h4>
                            <div>
                                <p class="lead"><i class="bi bi-car-front text-primary"></i> <strong>In auto</strong><br /> Parcheggi pubblici a 100m dal locale</p>
                                <p class="lead"><i class="bi bi-bus-front text-primary"></i> <strong>Con i mezzi</strong><br /> Fermata autobus linea urbana "Centro"</p>
                                <p class="lead"><i class="bi bi-person-walking text-primary"></i> <strong>A piedi</strong><br /> Nel centro pedonale di Piombino</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h2><i class="bi bi-clock text-primary"></i> Orari di Apertura</h2>
                        <div class="opening-hours-table">
                            <?php
                            $hours = get_theme_mod('opening_hours', "Martedì - Domenica: 19:00 - 24:00\nLunedì: Chiuso");
                            $hours_lines = explode("\n", $hours);
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
                            <p><i class="bi bi-info-circle text-primary"></i> <strong>Nota importante:</strong> Consigliamo di prenotare, specialmente nei weekend e nei giorni festivi.</p>
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
                                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', '+39 0565 123456'))); ?>" class="contact-phone-link">
                                            <?php echo esc_html(get_theme_mod('contact_phone', '+39 0565 123456')); ?>
                                        </a>
                                    </p>
                                    <small>Cliccabile da smartphone</small>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon-large">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Email</h4>
                                    <p>
                                        <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'info@pizzeriaegidio.it')); ?>">
                                            <?php echo esc_html(get_theme_mod('contact_email', 'info@pizzeriaegidio.it')); ?>
                                        </a>
                                    </p>
                                    <small>Per informazioni generali</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h2><i class="bi bi-calendar-event text-primary"></i> Prenotazioni</h2>

                        <div class="reservation-info">
                            <div class="reservation-highlight">
                                <h4>Come Prenotare</h4>
                                <p class="lead">Per prenotare il tuo tavolo, ti consigliamo di chiamarci al numero:</p>
                                <div class="phone-highlight">
                                    <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', '+39 0565 123456'))); ?>" class="btn btn-primary btn-medium">
                                        <i class="bi bi-telephone"></i> <?php echo esc_html(get_theme_mod('contact_phone', '+39 0565 123456')); ?>
                                    </a>
                                </div>
                            </div>

                            <div class="reservation-policy">
                                <h4>Policy Prenotazioni</h4>
                                <ul>
                                    <li><i class="bi bi-check-circle text-primary"></i> <strong>Non accettiamo prenotazioni via email</strong></li>
                                    <li><i class="bi bi-check-circle text-primary"></i> Consigliamo di prenotare con anticipo nei weekend</li>
                                    <li><i class="bi bi-check-circle text-primary"></i> Conferma telefonica obbligatoria per gruppi oltre 8 persone</li>
                                    <li><i class="bi bi-check-circle text-primary"></i> Possibilità di prenotare fino a 30 minuti prima dell'orario desiderato</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sezione social e informazioni aggiuntive -->
                <div class="contact-extra fade-in-up">
                    <div class="social-section">
                        <h2>Seguici sui Social</h2>
                        <p>Resta aggiornato sulle nostre novità, pizze speciali e eventi!</p>
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
        </div>
    </section>
</main>

<style>
.contact-layout {
    max-width: 1000px;
    margin: 0 auto;
}

.contact-info {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-md);
    margin-bottom: 2rem;
}

.contact-info h2 {
    color: var(--dark-color);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.contact-address {
    font-size: 1.1rem;
    margin-bottom: 1rem;
}

.contact-directions ul {
    list-style: none;
    padding: 0;
}

.contact-directions li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.opening-hours-table {
    margin-bottom: 1.5rem;
}

.hours-row {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid var(--gray-light);
}

.hours-row:last-child {
    border-bottom: none;
}

.day {
    font-weight: 600;
    color: var(--dark-color);
}

.time {
    color: var(--primary-color);
    font-weight: 500;
}

.hours-note {
    background: var(--white);
    padding: 1rem;
    border-radius: var(--border-radius);
    margin-top: 1rem;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.contact-method {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.contact-icon-large {
    background: var(--primary-color);
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.contact-details h4 {
    margin-bottom: 0.5rem;
    color: var(--dark-color);
}

.contact-phone-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    font-size: 1.2rem;
}

.contact-phone-link:hover {
    text-decoration: underline;
}

.reservation-highlight {
    background: var(--white);
    padding: 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    margin-bottom: 2rem;
}

.phone-highlight {
    margin-top: 1rem;
}

.reservation-policy ul {
    list-style: none;
    padding: 0;
}

.reservation-policy li {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.contact-extra {
    text-align: center;
    margin-top: 3rem;
}

.social-section h2 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.social-links-large {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
}

.social-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: var(--gray-dark);
    transition: var(--transition);
    padding: 1rem;
    border-radius: var(--border-radius);
}

.social-link:hover {
    color: var(--primary-color);
    transform: translateY(-2px);
}

.social-link i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.social-link.facebook:hover {
    color: #1877f2;
}

.social-link.instagram:hover {
    color: #e4405f;
}

.social-link.tripadvisor:hover {
    color: #00af87;
}

@media (max-width: 768px) {
    .contact-info {
        padding: 1.5rem;
    }

    .contact-method {
        flex-direction: column;
        text-align: center;
    }

    .social-links-large {
        flex-direction: column;
        gap: 1rem;
    }

    .hours-row {
        flex-direction: column;
        text-align: center;
        gap: 0.25rem;
    }
}
</style>

<?php get_footer(); ?>