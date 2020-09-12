<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<figure id="post-<?php the_ID(); ?>" <?php post_class('col-6 col-md-3 mb-8'); ?>>
		<?php if ( has_post_thumbnail()) : ?>
			<?php 
				$link = get_field('url_manufacturer');
				$id = get_the_ID();
				if( $link ): ?>
					<a href="<?php echo esc_url( $link_url ); ?>" title="<?php the_title(); ?>" class="d-flex justify-center items-center">
						<?php the_post_thumbnail('full', array('class' => 'mb-5 img-fluid mh-12')); ?>
					</a>
				<?php else: ?>
					<span class="d-flex justify-center items-center">
						<?php the_post_thumbnail('full', array('class' => 'mb-5 img-fluid mh-12')); ?>
					</span>
			<?php endif; ?>
		<?php endif; ?>
	</figure>
	<?php endwhile; ?>
<?php endif; ?>
