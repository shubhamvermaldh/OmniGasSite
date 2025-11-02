<?php
// pp($args);
?>
<?php
$heading = $args['heading'] ?? '';
$icon = $args['icon'] ?? 'fa-solid fa-map-location-dot';
$address = $args['address'] ?? '';
?>

<section class="map-section">
    <div class="container">
        <?php if ($heading): ?>
            <h2><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <div class="map-placeholder">
            <?php if ($icon): ?>
                <i class="<?php echo esc_attr($icon); ?>"></i>
            <?php endif; ?>

            <?php if ($address): ?>
                <p><?php echo esc_html($address); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
