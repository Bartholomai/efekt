<?php get_header(); ?>

<main role="main">
	<section class="my-16">
		<div class="container">
			<div class="row">
				<h1><?php _e( 'Kategorie  dla ', 'html5blank' ); single_cat_title(); ?></h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
