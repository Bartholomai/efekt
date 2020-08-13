<?php get_header(); ?>

	<main role="main" class="not-found">
		<section class="not-found-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
          <figure class="figure">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/404.svg" alt="TechTir - 404" class="image">
          </figure>
          <article id="post-404" class="article">
            <header class="header">
              <h5>
                <?php _e( 'Chciałeś nas stuningować? <br/ > Lepiej wróć na stronę główną...', 'html5blank' ); ?>
              </h5>
            </header>
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">
              <?php _e( 'Strona główna', 'html5blank' ); ?>
            </a>
          </article>
        </div>
      </div>
		</section>
	</main>

<?php get_footer(); ?>
