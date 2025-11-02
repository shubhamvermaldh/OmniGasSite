<?php
// pp($args);
?>
<?php if (!empty($args['acf_fc_layout']) && $args['acf_fc_layout'] === 'energy_shift') : ?>
    <section class="energy-shift">
        <div class="container">

            <?php if (!empty($args['heading']) || !empty($args['sub_heading'])) : ?>
                <div class="section-header">
                    <?php if (!empty($args['heading'])) : ?>
                        <h2><?php echo esc_html($args['heading']); ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($args['sub_heading'])) : ?>
                        <p class="section-subtitle"><?php echo esc_html($args['sub_heading']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($args['impact'])) : ?>
                <div class="impact-box">
                    <?php if (!empty($args['title'])) : ?>
                        <h3><?php echo esc_html($args['title']); ?></h3>
                    <?php endif; ?>

                    <div class="impact-grid">
                        <?php foreach ($args['impact'] as $impact) :
                            $icon = $impact['icon'] ?? '';
                            $impact_title = !empty($impact['title']) ? $impact['title'] : '';
                        ?>
                            <div class="impact-item">
                                <?php if ( $icon ) : ?>
                                    <i class="<?php echo esc_attr( $icon ); ?>"></i>
                                <?php endif; ?>
                                <?php if ($impact_title) : ?>
                                    <p><?php echo esc_html($impact_title); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>