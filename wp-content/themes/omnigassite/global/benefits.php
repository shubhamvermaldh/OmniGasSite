<?php
// pp($args);
?>
<?php
if ( ! empty( $args['acf_fc_layout'] ) && $args['acf_fc_layout'] === 'benefits' ) :
    $heading = $args['heading'] ?? '';
    $grids   = $args['grids'] ?? [];
?>
<section class="benefits-section">
    <div class="container">
        <?php if ( $heading ) : ?>
            <div class="section-header">
                <h2><?php echo esc_html( $heading ); ?></h2>
            </div>
        <?php endif; ?>

        <?php if ( ! empty( $grids ) ) : ?>
            <div class="benefits-grid">
                <?php foreach ( $grids as $grid ) : 
                    $icon   = $grid['icon'] ?? '';
                    $title  = $grid['heading'] ?? '';
                    $points = $grid['points'] ?? [];
                ?>
                    <div class="benefit-card">
                        <?php if ( $icon ) : ?>
                            <div class="benefit-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                        <?php endif; ?>

                        <?php if ( $title ) : ?>
                            <h3><?php echo esc_html( $title ); ?></h3>
                        <?php endif; ?>

                        <?php if ( ! empty( $points ) ) : ?>
                            <ul>
                                <?php foreach ( $points as $p ) : 
                                    if ( ! empty( $p['point'] ) ) :
                                ?>
                                    <li><?php echo esc_html( $p['point'] ); ?></li>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>
