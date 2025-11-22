<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-content">
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <span class="accent-font">Pizzeria</span> Egidio
                    </a>
                    <?php
                }
                ?>
            </div>

            <nav class="main-nav" id="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'pizzeria_egidio_fallback_menu',
                ));
                ?>
            </nav>

            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Menu">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>
</header>

<?php
// Menu di fallback se non è stato impostato un menu personalizzato
function pizzeria_egidio_fallback_menu() {
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . home_url('/') . '" class="' . (is_front_page() ? 'active' : '') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/menu/') . '" class="' . (is_page('menu') ? 'active' : '') . '">Menu</a></li>';
    echo '<li><a href="' . home_url('/la-nostra-storia/') . '" class="' . (is_page('la-nostra-storia') ? 'active' : '') . '">La Nostra Storia</a></li>';
    echo '<li><a href="' . home_url('/contatti/') . '" class="' . (is_page('contatti') ? 'active' : '') . '">Contatti</a></li>';
    echo '</ul>';
}
?>