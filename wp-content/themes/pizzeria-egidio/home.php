<?php get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>
    
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="text-center mb-4 fade-in-up">
                    <h1>Blog</h1>
                    <p class="lead">Le ultime novità dalla Pizzeria Egidio</p>
                </div>
                
                <div class="posts-grid grid grid-2">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post-card card fade-in-up">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url('card-image'); ?>" alt="<?php the_title_attribute(); ?>" class="card-image">
                                </a>
                            <?php endif; ?>
                            
                            <div class="card-content">
                                <header class="post-header">
                                    <h2 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="post-meta">
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <span class="meta-separator">•</span>
                                        <span class="post-author"><?php the_author(); ?></span>
                                    </div>
                                </header>
                                
                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <footer class="post-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Leggi tutto</a>
                                </footer>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <div class="pagination-wrapper text-center">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '<i class="bi bi-chevron-left"></i> Precedente',
                        'next_text' => 'Successivo <i class="bi bi-chevron-right"></i>',
                    ));
                    ?>
                </div>
                
            <?php else : ?>
                <div class="no-posts text-center fade-in-up">
                    <h2>Nessun articolo trovato</h2>
                    <p>Non ci sono ancora articoli pubblicati.</p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">Torna alla Home</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<style>
.post-card {
    margin-bottom: 2rem;
}

.post-header {
    margin-bottom: 1rem;
}

.card-title a {
    color: var(--dark-color);
    text-decoration: none;
    transition: var(--transition);
}

.card-title a:hover {
    color: var(--primary-color);
}

.post-meta {
    color: var(--gray-medium);
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.meta-separator {
    margin: 0 0.5rem;
}

.post-excerpt {
    margin-bottom: 1.5rem;
}

.post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.pagination-wrapper {
    margin-top: 3rem;
}

.pagination-wrapper .page-numbers {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    color: var(--dark-color);
    text-decoration: none;
    border: 1px solid var(--gray-light);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.pagination-wrapper .page-numbers:hover,
.pagination-wrapper .page-numbers.current {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.no-posts {
    padding: 3rem 0;
}
</style>

<?php get_footer(); ?>