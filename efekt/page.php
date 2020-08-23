<?php get_header(); ?>
	<main role="main">
		<section class="mt-16">
		  <div class="container">
		    <div class="row">
		      <div class="col-12 offset-md-3 col-md-6">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <figure class="mb-8">
                <?php the_post_thumbnail('oryginal', array('class' => 'image')); ?>
              </figure>
              <article id="post-<?php the_ID(); ?>" class="article" <?php post_class(); ?>>
                <header class="mb-8">
                  <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
                <?php edit_post_link(); ?>
              </article>
            <?php endwhile; ?>
            <?php else: ?>
              <article>
                <h2>
                  <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
                </h2>
              </article>
            <?php endif; ?>
          </div>
        </div>
      </div>
		</section>
	</main>
<?php get_footer(); ?>
