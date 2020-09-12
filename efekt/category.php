<?php get_header(); ?>

<main role="main">
	<section class="my-16">
		<div class="container">			
			<div class="row mb-16 mb-md-20">
				<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
			<div class="row">
				<div class="col-12 col-md-9">
					<div class="row">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
				<div class="col-12 col-md-3">
				<ul class="sidebar m-0">
					<?php wp_list_categories( array(
						'title_li' => '<h4>' . __( 'Inne kategorie', 'textdomain' ) . '</h2>'
					) ); ?> 
				</ul>
				</div>
			</div>		
		</div>
	</section>
</main>

<?php get_footer(); ?>