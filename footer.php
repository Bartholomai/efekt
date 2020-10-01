		<!-- footer -->
		<footer class="footer bg-black pt-10 mt-10 mt-md-20" role="contentinfo">
			<div class="container">
				<div class="row mb-8 text-center">
					<div class="col-12 col-md-4">
						<div class="py-4">
							<p class="font-bold">Przejdź do</p>
							<?php html5blank_nav(); ?>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="py-4">
							<p class="mb-4 font-bold">Dane kontaktowe</p>
							tel:<a href="tel:0048518692779" class="link-hover"> +48 518 692 779</a>
							<br />
							mail: <a href="mailto:efekt.trans@onet.eu" class="link-hover">efekt.trans@onet.eu</a>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="py-4">
							<p class="mb-4 font-bold">Adres</p>
							ul. Asnyka 15a
							<br />
							43-410 Zebrzydowice
						</div>
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
	</body>
</html>
