<?php /* Template Name: Kontakt */ get_header(); ?>

	<main role="main">
		<section>
		  <figure class="mb-16">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41137.27176387617!2d18.56035807948879!3d49.87853387940055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716aad723a3d4ad%3A0x5220a20e153bf599!2sAsnyka%2015%2C%2043-410%20Zebrzydowice!5e0!3m2!1spl!2spl!4v1598182051189!5m2!1spl!2spl" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
