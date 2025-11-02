<?php
// pp($args);
?>
<?php
// Suppose $args is your ACF flexible content array
if ( ! empty( $args['acf_fc_layout'] ) && $args['acf_fc_layout'] === 'protections' ) : 
    $heading     = $args['heading'] ?? '';
    $protections = $args['protections'] ?? [];
?>

<section class="safety-section">
    <div class="container">
        <?php if ( $heading ) : ?>
            <div class="section-header">
                <h2><?php echo esc_html( $heading ); ?></h2>
            </div>
        <?php endif; ?>

        <?php if ( ! empty( $protections ) ) : ?>
            <div class="safety-grid">
                <?php foreach ( $protections as $item ) : 
                    $icon       = $item['icon'] ?? '';
                    $protection = $item['protection'] ?? '';
                    if ( empty( $protection ) ) continue;
                ?>
                    <div class="safety-item">
                        <?php if ( $icon ) : ?>
                            <i class="<?php echo esc_attr( $icon ); ?>"></i>
                        <?php endif; ?>
                        <?php echo esc_html( $protection ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>
