<?php
/*
Template Name: La Nostra Storia
*/
get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>

    <section class="section">
        <div class="container">
            <div class="text-center mb-4 fade-in-up">
                <h1>Da Egidio: una storia piombinese</h1>
                <p class="lead">La tradizione che si tramanda, l'innovazione che ci guida</p>
            </div>

            <div class="story-content">
                <div class="pizza-special fade-in-up">
                    <div class="pizza-special-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/storia-egidio-vintage.jpg" alt="Foto storica di Egidio" />
                    </div>
                    <div class="pizza-special-content">
                        <h2><span class="accent-font">C'era una volta</span> Egidio...</h2>
                        <p class="lead">Negli anni '60, Egidio apriva le porte del suo primo locale nel cuore di Piombino, diventando rapidamente un punto di riferimento per tutta la comunità. La sua pizza, preparata con ingredienti semplici ma di qualità, conquistò il palato di generazioni di piombinesi.</p>

                        <p>Il segreto di Egidio era la passione: ogni pizza era preparata con cura maniacale, dalla scelta degli ingredienti alla cottura nel forno a legna. Il suo locale divenne presto un luogo di incontro, dove le famiglie si riunivano e i sapori autentici della tradizione italiana prendevano vita.</p>

                        <p>Per decenni, il nome "Egidio" è stato sinonimo di qualità e tradizione a Piombino, creando ricordi indelebili nella memoria collettiva della città.</p>
                    </div>
                </div>

                <div class="pizza-special fade-in-up">
                    <div class="pizza-special-content">
                        <h2>Il testimone <span class="text-primary">passa a noi</span></h2>
                        <p class="lead">Oggi, con profondo rispetto per questa eredità, portiamo avanti il nome di Egidio con una visione moderna e innovativa. Non si tratta solo di nostalgia, ma di un impegno concreto verso l'eccellenza.</p>

                        <p>La nostra filosofia unisce il meglio della tradizione con le più moderne tecniche di panificazione. Abbiamo mantenuto lo spirito originale di Egidio - l'attenzione alla qualità e il calore dell'accoglienza italiana - arricchendolo con:</p>

                        <ul class="story-features">
                            <li><i class="fas fa-seedling text-primary"></i> <strong>Ricerca delle materie prime:</strong> Selezioniamo personalmente ogni ingrediente, privilegiando fornitori locali e prodotti a km zero</li>
                            <li><i class="fas fa-clock text-primary"></i> <strong>Impasto innovativo:</strong> 72 ore di lievitazione naturale per una pizza più digeribile e saporita</li>
                            <li><i class="fas fa-home text-primary"></i> <strong>Ambiente rinnovato:</strong> Un locale moderno che mantiene il calore dell'accoglienza tradizionale</li>
                            <li><i class="fas fa-heart text-primary"></i> <strong>Passione familiare:</strong> Ogni pizza è preparata con la stessa dedizione che Egidio metteva nel suo lavoro</li>
                        </ul>

                        <p>Il risultato è una pizzeria che onora il passato guardando al futuro, dove ogni boccone racconta una storia di passione e qualità che attraversa le generazioni.</p>
                    </div>
                    <div class="pizza-special-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locale-moderno.jpg" alt="Il nostro locale oggi" />
                    </div>
                </div>

                <div class="section-alt" style="padding: 3rem; border-radius: 16px; margin: 3rem 0;">
                    <div class="text-center fade-in-up">
                        <h2 class="text-primary">La nostra promessa</h2>
                        <p class="lead">Ogni pizza che serviamo è un ponte tra passato e presente</p>
                        <p>Manteniamo viva la tradizione di Egidio attraverso l'innovazione, garantendo che ogni cliente possa gustare non solo una pizza eccellente, ma anche un pezzo di storia piombinese. La nostra mission è semplice: onorare il passato creando nuovi ricordi indimenticabili.</p>

                        <div style="margin-top: 2rem;">
                            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn-primary btn-large">Scopri le Nostre Pizze</a>
                            <a href="<?php echo esc_url(home_url('/contatti/')); ?>" class="btn btn-secondary btn-large" style="margin-left: 1rem;">Vieni a Trovarci</a>
                        </div>
                    </div>
                </div>

                <div class="pizza-special fade-in-up">
                    <div class="pizza-special-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pizza-making.jpg" alt="La preparazione delle nostre pizze" />
                    </div>
                    <div class="pizza-special-content">
                        <h2>L'arte della <span class="text-primary">pizza perfetta</span></h2>
                        <p class="lead">Dietro ogni pizza c'è un processo meticoloso che inizia tre giorni prima del servizio.</p>

                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Selezione degli ingredienti</h4>
                                    <p>Ogni mattina scegliamo personalmente pomodori, mozzarella e ingredienti freschi dai nostri fornitori di fiducia.</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Preparazione dell'impasto</h4>
                                    <p>Farine macinate a pietra, acqua, sale marino e madre viva iniziano il loro viaggio di 72 ore di lievitazione.</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Stesura e farciture</h4>
                                    <p>Con gesti sapienti, ogni pizza viene stesa a mano e condita con ingredienti dosati alla perfezione.</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h4>Cottura perfetta</h4>
                                    <p>Il nostro forno raggiunge i 450°C per una cottura rapida che mantiene fragranza e digeribilità.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.story-features {
    list-style: none;
    padding: 0;
}

.story-features li {
    margin-bottom: 1rem;
    padding-left: 0;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.story-features i {
    margin-top: 0.2rem;
    flex-shrink: 0;
}

.process-steps {
    margin-top: 2rem;
}

.process-step {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    gap: 1rem;
}

.step-number {
    background: var(--primary-color);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.step-content h4 {
    margin-bottom: 0.5rem;
    color: var(--dark-color);
}

.step-content p {
    margin: 0;
    color: var(--gray-dark);
}

@media (max-width: 768px) {
    .process-step {
        flex-direction: column;
        text-align: center;
    }

    .story-features li {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
}
</style>

<?php get_footer(); ?>