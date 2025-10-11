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

            <!-- Layout Contatti -->
            <?php include get_template_directory() . '/pages/page-contacts.php'; ?>
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