<?php /* Template Name: Kontakt */ get_header(); ?>

	<main role="main">
		<section>
		  <figure class="mb-16">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10275.23563412501!2d19.00960690455703!3d49.921161379304685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716a33cc78f1be5%3A0x7eaad602d2903628!2sTechTIR%20sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1596107561834!5m2!1spl!2spl" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		  </figure>
		  <div class="container">
		    <div class="row">
		      <div class="col-12 offset-md-2 col-md-8">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-8">
                  <h1>
                    <?php the_title(); ?>
                  </h1>
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

<?php get_footer('simple'); ?>
