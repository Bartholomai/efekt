<?php get_header(); ?>

<main role="main">
	<section class="my-16">
		<div class="container">
			<div class="row mb-16">
				<h1><?php _e( 'Producenci ', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
			<div class="row">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
