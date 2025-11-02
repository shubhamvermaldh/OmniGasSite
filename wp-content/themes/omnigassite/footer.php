	<?php
	$footer = get_field('footer', 'option');
	// pp($footer);
	?>
	<footer class="main-footer">
		<div class="container">
			<div class="footer-content">

				<!-- Footer Logo & About -->
				<div class="footer-col footer-about">
					<?php if (!empty($footer['footer_logo']['url'])): ?>
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url($footer['footer_logo']['url']); ?>"
								alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
								class="logo-img">
						</a>
					<?php endif; ?>

					<?php if (!empty($footer['about_text'])): ?>
						<p><?php echo esc_html($footer['about_text']); ?></p>
					<?php endif; ?>
				</div>

				<!-- Footer Menu -->
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

				<!-- Contact Info -->
				<div class="footer-col footer-contact">
					<h4><?php esc_html_e('Contact Info', 'omnigassite'); ?></h4>
					<ul class="contact-info">
						<?php if (!empty($footer['contact_info'])): ?>
							<?php foreach ($footer['contact_info'] as $contact): ?>
								<li>
									<i class="<?php echo esc_attr($contact['icon']); ?>"></i>
									<?php echo $contact['info']; ?>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>

				<!-- Social Media -->
				<div class="footer-col footer-social">
					<h4><?php esc_html_e('Follow Us', 'omnigassite'); ?></h4>
					<div class="social-links">
						<?php if (!empty($footer['social_media'])): ?>
							<?php foreach ($footer['social_media'] as $social):
								$link = $social['link']['url'] ?? '#';
							?>
								<a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($social['link']['target'] ?? '_self'); ?>">
									<i class="<?php echo esc_attr($social['icon']); ?>"></i>
								</a>
							<?php endforeach; ?>
						<?php endif; ?>
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