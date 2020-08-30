<?php
	if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); ?>
			</a>
		<?php endif; ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php edit_post_link(); ?>
	</article>
<?php endwhile; ?>

<?php else: ?>

	<article>
		<p class="font-lg"><?php _e( 'Przepraszamy, nie ma tu cic do wyświetlenia.', 'html5blank' ); ?></p>
	</article>

<?php endif; ?>
