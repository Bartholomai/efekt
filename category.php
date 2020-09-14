<?php get_header(); ?>

<main role="main">
	<section class="my-16">
		<div class="container">			
			<article class="row mb-16">
				<h1 class="mb-4"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
				<div class="font-size-base lh-base">
					<?php echo category_description( get_category_by_slug( 'category-slug' )->term_id ); ?>
				</div>
			</article>
			<div class="row">
				<div class="col-12 col-md-9">
					<div class="row">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>		
		</div>
	</section>
</main>

<?php get_footer(); ?>