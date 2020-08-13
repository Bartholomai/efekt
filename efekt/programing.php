<?php /* Template Name: Programowanie */ ?>

<?php get_header(); ?>

<main role="main">
	<section class="mt-16 mb-8 mb-md-16">
	  <div class="container">
      <div class="row">
        <header class="col-12 col-md-8 offset-md-2">
          <h1 class="mb-8 mb-md-16"><?php the_title(); ?></h1>
        </header>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="col-12 col-md-8 offset-md-2 article" <?php post_class(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
          </article>
        <?php endwhile; ?>
        <?php else: ?>
          <article class="col-12 col-md-8 offset-md-2">
            <h2>
              <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
            </h2>
          </article>
        <?php endif; ?>
      </div>
    </div>
  </section>  
  <section class="section-icon">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
          <?php
            $args = array(
              'post_type' => 'programowanie',
              'posts_per_page' => 16
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              echo '<div class="row pb-8">';
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<div class="col-6 col-md-3">';
                echo '<figure class="mb-8 text-center">';
                echo the_post_thumbnail('thumbnail', array('class' => 'image mb-5')).'<figcaption class="font-md lh-md">'.get_the_title().'</figcaption></figure></div>';
              endwhile;
              echo '</div>';
            }
          ?>
        </div>
      </div>
    </div>
	</section>
  <section class="mt-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
          <article class="article">            
            <?php the_field('after_content'); ?>
          </article>          
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
