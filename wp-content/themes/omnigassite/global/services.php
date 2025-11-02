<?php
// pp($args);
?>
<?php if (!empty($args)) : ?>
<section class="about-content">
    <div class="container">

        <?php if (!empty($args['heading']) || !empty($args['description'])) : ?>
            <div class="section-header">
                <?php if (!empty($args['heading'])) : ?>
                    <h2><?php echo esc_html($args['heading']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($args['description'])) : ?>
                    <p class="section-subtitle"><?php echo esc_html($args['description']); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($args['services']) && is_array($args['services'])) : ?>
            <div class="services-grid">
                <?php foreach ($args['services'] as $service) : ?>
                    <div class="service-card">
                        <?php if (!empty($service['icon'])) : ?>
                            <div class="service-icon"><i class="<?php echo esc_attr($service['icon']); ?>"></i></div>
                        <?php endif; ?>

                        <?php if (!empty($service['heading'])) : ?>
                            <h3><?php echo esc_html($service['heading']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($service['description'])) : ?>
                            <p><?php echo esc_html($service['description']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
