		<!-- footer -->
		<footer class="footer bg-black pt-10 mt-10 mt-md-20" role="contentinfo">
			<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<?php html5blank_nav(); ?>
				</div>
				<div class="col-12 col-md-4">
				<?php the_field('footer_contact_data_column_1'); ?>
				</div>
				<div class="col-12 col-md-4">
					<?php the_field('footer_contact_data_column_2'); ?>
				</div>
			</div>
			<div class="row">
				<p class="copyright my-4 text-center">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Zaprojektowane', 'b-brave'); ?>
				<a href="//b-brave.pl" title="b-brave" class="link">b-brave</a>.
				</p>
			</div>
			</div>
		</footer>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'techtir.pl');
		ga('send', 'pageview');
		</script>
	</body>
</html>
