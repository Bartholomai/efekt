<?php /* Template Name: Strona główna */ get_header(); ?>

	<main role="main" class="main homepage">
	  <section class="main-section">
	    <figure class="figure" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></figure>
	    <div class="main-content">
        <article class="col-12 article text-center">
          <header>
            <h1 class="header">
              <?php the_title(); ?>
            </h1>
          </header>
          <div class="text text-lg">
            <?php the_content(); ?>
          </div>
          <a href="/programowanie-tirow" class="btn btn-primary-outline">
            Oferta
          </a>
        </article>
      </div>
	  </section>
  </main>
  
  <?php get_footer(); ?>

