<?php get_header(); ?>

<main role="main">
    <section class="chiptuning mt-16">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 offset-md-1">
                    <?php if ( has_post_thumbnail()) : ?>
                    <figure class="card mb-8 p-8"><?php the_post_thumbnail(); ?></figure>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-8">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="mt-0 mb-8"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                    </article>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <article>
                        <h1><?php _e( 'Nie ma treści do wyświetlenia...', 'html5blank' ); ?></h1>
                    </article>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
