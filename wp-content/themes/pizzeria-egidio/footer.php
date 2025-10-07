<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Pizzeria Egidio</h3>
                <p>Nel cuore di Piombino, dove la tradizione incontra l'innovazione per offrirti la pizza più buona e digeribile della città.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="TripAdvisor"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Contatti</h3>
                <div class="contact-item">
                    <span><?php echo esc_html(get_theme_mod('contact_address', 'Via Roma 123, 57025 Piombino (LI)')); ?></span>
                </div>
                <div class="contact-item">
                    <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('contact_phone', '+39 0565 123456'))); ?>">
                        <?php echo esc_html(get_theme_mod('contact_phone', '+39 0565 123456')); ?>
                    </a>
                </div>
                <div class="contact-item">
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'info@pizzeriaegidio.it')); ?>">
                        <?php echo esc_html(get_theme_mod('contact_email', 'info@pizzeriaegidio.it')); ?>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Orari di Apertura</h3>
                <div class="opening-hours">
                    <?php
                    $hours = get_theme_mod('opening_hours', "Martedì - Domenica: 19:00 - 24:00\nLunedì: Chiuso");
                    echo nl2br(esc_html($hours));
                    ?>
                </div>
            </div>

            <div class="footer-section">
                <h3>Menu Rapido</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Pizzeria Egidio. Tutti i diritti riservati. | Tema sviluppato da <a href="#" target="_blank">Mattia Filosa</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            const icon = this.querySelector('i');
            if (mainNav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Header scroll effect
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

</body>
</html>