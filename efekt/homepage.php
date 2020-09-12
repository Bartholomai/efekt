<?php /* Template Name: Strona główna */ get_header(); ?>

	<main role="main" class="main homepage">
	  <section class="main-section">
	    <figure class="figure" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></figure>
	    <div class="main-content">
        <article class="col-12 article text-center text-black">
          <header>
            <h1 class="header font-bold">
              <?php the_title(); ?>
            </h1>
          </header>
          <div class="text text-lg text-black">
            <?php the_content(); ?>
          </div>
          <a href="/producenci" class="btn btn-primary-outline">
            Oferta
          </a>
        </article>
      </div>
    </section>
    
    <section class="section-icon pt-sm-12 my-sm-12 my-md-16">
      <div class="container">
        <div class="row">
          <?php
            $args = array(
              'page_id' => '17',
            );
            $jobs = new WP_Query( $args );

            if( $jobs->have_posts() ){
              while( $jobs->have_posts() ):
                $jobs->the_post();
                echo '<article class="col-12 offset-md-3 col-md-6 mb-8 text-center">';
                echo '<header class="mb-4"><h2>'.get_the_title().'</h2></header><p class="font-lg lh-lg">'.get_the_excerpt().'</p></article>';
              endwhile;
            }
          ?>
          <div class="col-12 col-md-4 offset-md-4 mb-16 text-center">
            <a href="/o-nas" class="btn btn-primary-outline">Więcej</a>
          </div>
        </div>
      </div>
    </section>            
    <section class="section-icon pt-sm-12 my-sm-12 my-md-16">
      <div class="container">
        <div class="row mb-16 mb-md-32">    
            <div class="col">
            <header class="text-center">
              <h2>Producenci</h2>
            </header>
            </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1">
            <?php
              $args = array( 'hide_empty' => '0');
              $categories = get_categories($args);
              if($categories){
                echo '<div class="row justify-center">';
                foreach($categories as $category) {
                  $link = get_term_link($category);
                  echo '<div class="col-6 col-md-4 mb-8 text-center"><a href="'.$link.'" class="d-flex flex-column justify-center w-50">';
                  $size = "thumbnail";
                  $image = get_field('image', 'category_'.$category->term_id);    
                  echo '<img src="' . $image . '" />'; 
                  echo '<p class="mt-4 font-size-base">' . $category->name . '</p>';
                  echo '</a></div>';
                } 
                echo '</div>';
              }    

              ?>
            </div>
        </div>
    </section>
  </main>
  
  <?php get_footer(); ?>

