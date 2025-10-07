<?php get_header(); ?>

<main class="main-content">
    <?php pizzeria_egidio_breadcrumbs(); ?>
    
    <section class="section">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <article class="single-post fade-in-up">
                    <header class="post-header text-center mb-4">
                        <h1><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            <span class="meta-separator">•</span>
                            <span class="post-author">di <?php the_author(); ?></span>
                            <?php if (has_category()) : ?>
                                <span class="meta-separator">•</span>
                                <span class="post-categories"><?php the_category(', '); ?></span>
                            <?php endif; ?>
                        </div>
                    </header>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-featured-image mb-4">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="featured-image">
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-content">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pagine:', 'pizzeria-egidio'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                    
                    <?php if (has_tag()) : ?>
                        <footer class="post-footer">
                            <div class="post-tags">
                                <strong>Tag:</strong> <?php the_tags('', ', ', ''); ?>
                            </div>
                        </footer>
                    <?php endif; ?>
                    
                    <nav class="post-navigation">
                        <div class="nav-links">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <?php if ($prev_post) : ?>
                                <div class="nav-previous">
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-secondary">
                                        <i class="fas fa-chevron-left"></i> <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <div class="nav-next">
                                    <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-secondary">
                                        <?php echo get_the_title($next_post); ?> <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                    
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <div class="comments-section">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<style>
.single-post {
    max-width: 800px;
    margin: 0 auto;
}

.post-header {
    margin-bottom: 2rem;
}

.post-header h1 {
    margin-bottom: 1rem;
}

.post-meta {
    color: var(--gray-medium);
    font-size: 0.95rem;
}

.meta-separator {
    margin: 0 0.5rem;
}

.post-categories a,
.post-tags a {
    color: var(--primary-color);
    text-decoration: none;
}

.post-categories a:hover,
.post-tags a:hover {
    text-decoration: underline;
}

.post-featured-image {
    border-radius: var(--border-radius-lg);
    overflow: hidden;
}

.featured-image {
    width: 100%;
    height: auto;
    display: block;
}

.post-content {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 2rem;
}

.post-content h2,
.post-content h3,
.post-content h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: var(--dark-color);
}

.post-content p {
    margin-bottom: 1.5rem;
}

.post-content img {
    max-width: 100%;
    height: auto;
    border-radius: var(--border-radius);
    margin: 1.5rem 0;
}

.post-content blockquote {
    background: var(--light-color);
    border-left: 4px solid var(--primary-color);
    padding: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    border-radius: var(--border-radius);
}

.post-footer {
    border-top: 1px solid var(--gray-light);
    padding-top: 1.5rem;
    margin-bottom: 2rem;
}

.post-tags {
    margin-bottom: 1rem;
}

.post-navigation {
    margin: 3rem 0;
}

.nav-links {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
}

.nav-previous,
.nav-next {
    flex: 1;
}

.nav-next {
    text-align: right;
}

.nav-links .btn {
    display: inline-block;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.page-links {
    text-align: center;
    margin: 2rem 0;
}

.page-links a,
.page-links > span {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    color: var(--dark-color);
    text-decoration: none;
    border: 1px solid var(--gray-light);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.page-links a:hover,
.page-links .current {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.comments-section {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid var(--gray-light);
}

@media (max-width: 768px) {
    .nav-links {
        flex-direction: column;
    }
    
    .nav-next {
        text-align: left;
    }
    
    .post-content {
        font-size: 1rem;
    }
}
</style>

<?php get_footer(); ?>