<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<figure id="post-<?php the_ID(); ?>" <?php post_class('col-6 col-md-3 mb-8'); ?>>
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-flex justify-center items-center">
				<?php the_post_thumbnail('full', array('class' => 'mb-5 img-fluid mh-12')); ?>
			</a>
		<?php endif; ?>
	</figure>
	<?php endwhile; ?>
<?php endif; ?>
