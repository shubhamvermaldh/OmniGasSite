	</main>

	<footer class="main-footer">
		<div class="container">
			<div class="footer-content">

				<div class="footer-col footer-about">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.jpeg'); ?>" 
							alt="<?php bloginfo('name'); ?>" class="logo-img">
					</a>
					<p><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
				</div>

				<div class="footer-col footer-links">
					<h4><?php esc_html_e('Quick Links', 'omnigassite'); ?></h4>
					<?php
						wp_nav_menu([
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => '',
							'fallback_cb'    => false,
						]);
					?>
				</div>

				<div class="footer-col footer-contact">
					<h4><?php esc_html_e('Contact Info', 'omnigassite'); ?></h4>
					<ul class="contact-info">
						<li><i class="fas fa-map-marker-alt"></i> Bole Dembel, behind Abbarus Complex BLD 1st Floor, Addis Ababa, Ethiopia</li>
						<li><i class="fas fa-envelope"></i> <a href="mailto:info@omnigas.com">info@omnigas.com</a></li>
						<li><i class="fas fa-phone"></i> <a href="tel:+447780378098">+44 7780 378098</a></li>
					</ul>
				</div>

				<div class="footer-col footer-social">
					<h4><?php esc_html_e('Follow Us', 'omnigassite'); ?></h4>
					<div class="social-links">
						<a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
						<a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
						<a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
						<a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
					</div>
				</div>

			</div><!-- .footer-content -->

			<div class="footer-bottom">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'omnigassite'); ?></p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
