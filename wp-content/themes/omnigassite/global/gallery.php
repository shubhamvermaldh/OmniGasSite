<?php
// pp($args);
?>
<?php if ( !empty($args['gallery']) ) : ?>
<section class="gallery-section">
    <div class="container">
        <?php if ( !empty($args['heading']) || !empty($args['sub_heading']) ) : ?>
        <div class="section-header">
            <?php if ( !empty($args['heading']) ) : ?>
                <h2><?php echo esc_html($args['heading']); ?></h2>
            <?php endif; ?>

            <?php if ( !empty($args['sub_heading']) ) : ?>
                <p class="section-subtitle"><?php echo esc_html($args['sub_heading']); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="gallery-grid">
            <?php foreach ( $args['gallery'] as $image ) : ?>
                <div class="gallery-item">
                    <img 
                        src="<?php echo esc_url($image['url']); ?>" 
                        alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>" 
                        loading="lazy"
                    >
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
