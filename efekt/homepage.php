<?php /* Template Name: Strona główna */ get_header(); ?>

	<main role="main" class="main homepage">
	  <section class="main-section">
	    <figure class="figure">
	      <?php the_post_thumbnail('oryginal', array('class' => 'image')); ?>
	    </figure>
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
	  <section class="section-about my-16 pt-16">
      <div class="container">
        <div class="row pb-8">
          <?php
            $args = array(
              'page_id' => '59',
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<div class="col-12 col-md-3 offset-md-1 d-none d-sm-block mb-8 mb-md-0">';
                echo '<figure class="figure text-center">';
                echo the_post_thumbnail('original', array('class' => 'image')).'</figure></div>';
                echo '<div class="col-12 col-md-7 d-flex flex-wrap align-content-center"><h2 class="mt-0">'.get_the_title().'</h2>';
                echo '<p class="d-inline-flex mb-6 font-md">'.get_the_excerpt().'</p>';
                echo '<div><a href="'.get_page_link().'" class="btn btn-primary-outline btn-lg">Więcej o TechTir</a></div>';
              endwhile;
            }
          ?>
        </div>
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6 mt-12 mt-md-16">
            <div class="pb-16 border-bottom"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-icon pt-sm-12 my-sm-12 my-md-16">
      <div class="container">
        <div class="row">
          <?php
            $args = array(
              'page_id' => '64',
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<article class="col-12 offset-md-3 col-md-6 mb-16 text-center">';
                echo '<header class="mb-4"><h2>'.get_the_title().'</h2></header><p class="font-lg lh-lg">'.get_the_excerpt().'</p></article>';
              endwhile;
            }
          ?>
        </div>
        <?php
          $args = array(
            'post_type' => 'programowanie',
            'posts_per_page' => 12
          );
          $jobs = new WP_Query( $args );

          if( $jobs->have_posts() ){
            echo '<div class="row pb-8">';
            while( $jobs->have_posts() ):
              $jobs->the_post();
              echo '<div class="col-12 col-md-3">';
              echo '<figure class="mb-8 text-center">';
              echo the_post_thumbnail('thumbnail', array('class' => 'image mb-5')).'<figcaption class="font-md lh-md">'.get_the_title().'</figcaption></figure></div>';
            endwhile;
            echo '</div>';
          }
        ?>
        </div>
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
            <div class="d-flex justify-content-center">
              <a href="/programowanie-tirow" class="btn btn-primary-outline">
                Więcej
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6 mt-12 mt-md-16">
            <div class="pb-16 border-bottom"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-icon my-sm-12 pt-sm-12 my-md-16 pt-md-16">
      <div class="container">
        <div class="row">
          <?php
            $args = array(
              'page_id' => '178',
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<article class="col-12 offset-md-2 col-md-8 mb-16 text-center">';
                echo '<header class="mb-4"><h2>'.get_the_title().'</h2></header><p class="font-lg lh-lg">'.get_the_excerpt().'</p></article>';
              endwhile;
            }
          ?>
        </div>
        <?php
          $args = array(
            'post_type' => 'chiptuning',
            'posts_per_page' => 8
          );
          $jobs = new WP_Query( $args );

          if( $jobs->have_posts() ){
            echo '<div class="row pb-8 justify-content-center">';
            while( $jobs->have_posts() ):
              $jobs->the_post();
              echo '<div class="col-6 col-md-3">';
              echo '<figure class="mb-16 text-center">';
              echo '<a href="'.get_page_link().'">';
              echo the_post_thumbnail('thumbnail', array('class' => 'image mb-5')).'<figcaption class="font-md lh-md">'.get_the_title().'</figcaption></a></figure></div>';
            endwhile;
            echo '</div>';
          }
        ?>
        </div>
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
            <div class="d-flex justify-content-center">
              <a href="/chiptuning-tirow" class="btn btn-primary-outline">
                Więcej
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6 mt-12 mt-md-16">
            <div class="pb-16 border-bottom"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-16 pt-16 d-none">
      <div class="container">
        <div class="row">
          <div class="col-12 offset-md-3 col-md-6">
            <header class="row mb-16 pt-20 text-center border-top">
              <h2>Reazlizacje</h2>
            </header>
          </div>
        </div>
        <?php
          $args = array(
            'post_type' => 'realizacje',
            'posts_per_page' => 3
          );
          $jobs = new WP_Query( $args );

          if( $jobs->have_posts() ){
            echo '<div class="row pb-8">';
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<div class="col-12 col-md-6 col-lg-4 mb-8">';
                echo '<figure class="figure-thumbnail mb-8">';
                echo '<a href="'.get_the_permalink().'" class="w-100">';
                echo the_post_thumbnail('thumbnail', array('class' => 'image mb-5')).'</a></figure>';
                echo '<h3 class="mb-4"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
                echo '<p class="d-flex flex-wrap mb-0 font-md">'.get_the_excerpt().'</p></div></div>';
            endwhile;
            echo '</div>';
          }
        ?>
      </div>
    </section>
    <section class="my-16 py-16">
      <div class="container">
        <div class="row">
          <article class="col-12 offset-md-3 col-md-6 mb-16 text-center">
            <header class="mb-4">
              <h2>Napisz do nas</h2>
            </header>
            <p class="font-md">Z największą przyjemnością odpowiemy na Twoje pytania</p>
          </article>
        </div>
        <div class="row">
          <div class="col-12 offset-md-2 col-md-8">
          <div class="jirei-post-list">
            <?php echo do_shortcode(" [contact-form-7 id='75' title='Formularz na stronie głównej'] "); ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <?php get_footer(); ?>

