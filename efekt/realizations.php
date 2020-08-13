<?php /* Template Name: Realizacje */ ?>

<?php get_header(); ?>
	<main role="main">
		<section class="mt-16">
		  <div class="container">
		    <div class="row mb-16 text-center">
		      <h1><?php the_title(); ?></h1>
		    </div>
		    <div class="row">
          <?php
            query_posts(array(
               'post_type' => 'realizacje'
            )); ?>
            <?php
            while (have_posts()) : the_post(); ?>
              <div class="col-12 col-md-6 col-lg-4">
                <figure class="figure-thumbnail mb-8">
                  <a href="<?php the_permalink() ?>" class="w-100">
                    <?php the_post_thumbnail(); ?>
                  </a>
                </figure>
                <h3 class="mb-4">
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
                <p class="d-flex flex-wrap font-md"><?php the_excerpt(); ?></p>
              </div>
            <?php endwhile;
          ?>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
