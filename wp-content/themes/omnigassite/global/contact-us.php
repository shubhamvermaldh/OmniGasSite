<?php
// pp($args);
?>
<?php
$left_heading     = $args['left_heading'] ?? '';
$right_heading    = $args['right_heading'] ?? '';
$description      = $args['description'] ?? '';
$details          = $args['details'] ?? [];
$social_media     = $args['social_media'] ?? [];
$form_shortcode   = $args['form_shortcode'] ?? '';
?>

<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            
            <!-- Left Side -->
            <div class="contact-info">
                <?php if ($left_heading): ?>
                    <h2><?php echo esc_html($left_heading); ?></h2>
                <?php endif; ?>

                <?php if ($description): ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                
                <?php if (!empty($details)): ?>
                    <div class="contact-details">
                        <?php foreach ($details as $item): ?>
                            <div class="contact-item">
                                <?php if (!empty($item['icon'])): ?>
                                    <div class="contact-icon">
                                        <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                                    </div>
                                <?php endif; ?>

                                <div class="contact-text">
                                    <?php if (!empty($item['title'])): ?>
                                        <h4><?php echo esc_html($item['title']); ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($item['detail'])): ?>
                                        <p><?php echo $item['detail']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($social_media)): ?>
                    <div class="social-section">
                        <h4>Follow Us</h4>
                        <div class="social-links-large">
                            <?php foreach ($social_media as $social): 
                                $icon = $social['icon'] ?? '';
                                $link = $social['link']['url'] ?? '#';
                                $target = !empty($social['link']['target']) ? ' target="_blank"' : '';
                            ?>
                                <a href="<?php echo esc_url($link); ?>" <?php echo $target; ?>>
                                    <i class="<?php echo esc_attr($icon); ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Side -->
            <div class="contact-form-wrapper">
                <?php if ($right_heading): ?>
                    <h2><?php echo esc_html($right_heading); ?></h2>
                <?php endif; ?>

                <?php if ($form_shortcode): ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
