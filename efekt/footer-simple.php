		<!-- footer -->
		<footer class="footer bg-black mt-10 mt-md-20" role="contentinfo">
			<div class="container">			  	
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