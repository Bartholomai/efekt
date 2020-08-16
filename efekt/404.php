<?php get_header(); ?>

	<main role="main" class="not-found">
		<section class="not-found-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3 text-center">        
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/svg/404.svg" alt="TechTir - 404" class="image">
          </figure>
          <article id="post-404" class="article">
            <header class="mb-8">
              <h1 class="mt-8">- 404 -</h1>
              <h4>
                <?php _e( 'Lepiej będzie <br/ > jak wrócisz na stronę główną ;)', 'html5blank' ); ?>
              </h4>
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
