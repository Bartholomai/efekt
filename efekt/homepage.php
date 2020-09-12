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
    
    <section class="my-16 my-md-32">
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
                echo '<article class="col-12 offset-md-3 col-md-6 mb-4 mb-md-8 text-center">';
                echo '<header class="mb-4"><h2>'.get_the_title().'</h2></header><p class="font-size-lg lh-lg">'.get_the_excerpt().'</p></article>';
              endwhile;
            }
          ?>
          <div class="col-12 col-md-4 offset-md-4 text-center">
            <a href="/o-nas" class="btn btn-primary-outline">Więcej</a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
      <div class="row justify-center">    
            <div class="col-12 col-md-4">
              <hr class="border-0 border-top" />
            </div>
        </div>
      </div>
    </section>       
    <section class="my-16 my-md-32">
      <div class="container">
        <div class="row mb-16 justify-center text-center">    
            <div class="col-12 col-md-6">
            <header class="mb-4 mb-md-8">
              <h2>Produkty</h2>
            </header>
            <p class="font-size-lg lh-lg">Wybierz produkt, który Cię interesuję a my dostarczymy go do Ciebie tak szybko jak będzie to moliwe.</p>
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
                  echo '<div class="col-6 col-md-4 mb-8 text-center"><a href="'.$link.'" class="d-flex flex-column justify-center p-4 px-md-20 py-md-8 card-hover rounded mx-auto">';
                  $size = "thumbnail";
                  $image = get_field('image', 'category_'.$category->term_id);    
                  echo '<img src="' . $image . '" />'; 
                  echo '<p class="mt-4 font-size-lg lh-lg">' . $category->name . '</p>';
                  echo '</a></div>';
                } 
                echo '</div>';
              }    
            ?>
          </div>
        </div>
        <div class="col-12 col-md-4 offset-md-4 text-center">
            <a href="/producenci" class="btn btn-primary-outline">Wszyscy producenci</a>
          </div>
    </section>
    <section>
      <div class="container">
      <div class="row justify-center">    
            <div class="col-12 col-md-4">
              <hr class="border-0 border-top" />
            </div>
        </div>
      </div>
    </section>
    <section class="my-16 my-md-32">
      <div class="container">
      <div class="row justify-center">    
            <div class="col-12 col-md-4 offset-md-1">
              <img src="https://efekt-zebrzydowice.pl/wp-content/uploads/2020/09/efekt-dostawa.jpg" class="img-fluid mb-4 mb-md-0 rounded"/>
              <?php if( get_field('img_delivery-section') ): ?>
                <img src="<?php the_field('img_delivery-section'); ?>" class="img-fluid mb-4 mb-md-0 rounded" />                
              <?php endif; ?>            
            </div>
            <div class="col-12 col-md-6 text-center text-md-left">
              <h2 class="mb-4 mb-md-8">
                Zapewniamy dostawę
              </h2>
              <p class="font-size-lg lh-lg">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hendrerit dolor magna eget est lorem.
              </p>
                <?php if( get_field('title_delivery-section') ): ?>
                  <h2 class="mb-4 mb-md-8">
                    Zapewniamy dostawę
                    <?php the_field('title_delivery-section'); ?>
                  </h2>
                <?php endif; ?>              
                <?php if( get_field('text_delivery-section') ): ?>
                  <p class="font-size-lg lh-lg"><?php the_field('text_delivery-section'); ?></p>
                <?php endif; ?>
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
      <div class="row justify-center">    
            <div class="col-12 col-md-4">
              <hr class="border-0 border-top" />
            </div>
        </div>
      </div>
    </section>
    <section class="my-16 my-md-32">
      <div class="container">
        <div class="row mb-16 justify-center text-center">    
            <div class="col-12 col-md-6">
            <header class="mb-4 mb-md-8">
              <h2>Napisz do nas</h2>
            </header>
            <p class="font-size-lg lh-lg">Z największą przyjemnością odpowiemy na Twoje pytania.</p>
            </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2">
          <?php echo do_shortcode(" [contact-form-7 id='168' title='Formularz kontaktowy na stronie głównej'] "); ?>        
          </div>
        </div>      
    </section>
  </main>
  
  <?php get_footer(); ?>

