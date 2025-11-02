<?php
// pp($args);
?>
<?php if (!empty($args)) : ?>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <?php if (!empty($args['heading'])) : ?>
                <h2><?php echo esc_html($args['heading']); ?></h2>
            <?php endif; ?>

            <?php if (!empty($args['description'])) : ?>
                <p><?php echo esc_html($args['description']); ?></p>
            <?php endif; ?>

            <?php if (!empty($args['button']['title']) && !empty($args['button']['url'])) : ?>
                <a href="<?php echo esc_url($args['button']['url']); ?>"
                   class="btn btn-primary btn-large"
                   <?php echo !empty($args['button']['target']) ? 'target="_blank"' : ''; ?>>
                   <?php echo esc_html($args['button']['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
