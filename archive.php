<?php get_header(); ?>

<main role="main">
    <section class="mt-16">
        <div class="container">
            <div class="row">
			<div class="col-12 col-md-6 offset-md-3">
                <h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
                <?php get_template_part('loop'); ?>
                <?php get_template_part('pagination'); ?>
			</div>
		</div>
    </section>    
</main>

<?php get_footer(); ?>