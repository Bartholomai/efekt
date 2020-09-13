<?php /* Template Name: Manufacturer */ ?>

<?php get_header(); ?>

<main role="main">
  <section class="mt-16">
    <div class="container">
      <div class="row">
        <header class="col-12">
          <h1 class="mb-4"><?php the_title(); ?></h1>
        </header>
        <div class="col-12">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="font-size-base lh-base" <?php post_class(); ?> >
              <?php the_content(); ?>              
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
        <div class="col-12">
          <?php
            $args = array(
              'post_type' => 'producenci',
              'order'=>'ASC',
              'posts_per_page' => 30
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              echo '<div class="row pb-8">';
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<div class="col-6 col-md-3 mb-8">';
                echo '<figure class="mb-8 text-center">';
                echo '<a href="'.get_field('url_manufacturer').'" target="_blank"><div class="d-flex justify-center items-center h-100 mb-5 p-4 card-hover border rounded">';
                echo the_post_thumbnail('full', array('class' => 'h-8')).'</div><figcaption class="font-md lh-md">'.get_the_title().'</figcaption></figure></div>';
              endwhile;
              echo '</div>';
            }
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
