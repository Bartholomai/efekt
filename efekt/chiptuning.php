<?php /* Template Name: Chiptuning */ ?>

<?php get_header(); ?>

<main role="main">
  <section class="mt-16">
    <div class="container">
      <div class="row">
        <header class="col-12 col-md-8 offset-md-2">
          <h1 class="mb-8 mb-md-16"><?php the_title(); ?></h1>
        </header>
        <div class="col-12 col-md-8 offset-md-2">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="article" <?php post_class(); ?>>
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
  <section class="section-icon mt-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
          <?php
            $args = array(
              'post_type' => 'chiptuning',
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              echo '<div class="row pb-8">';
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<div class="col-6 col-md-3">';
                echo '<figure class="mb-8 text-center">';
                echo '<a href="'.get_page_link().'">';
                echo the_post_thumbnail('thumbnail', array('class' => 'image mb-5')).'<figcaption class="font-md lh-md">'.get_the_title().'</figcaption></figure></div>';
              endwhile;
            }
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
