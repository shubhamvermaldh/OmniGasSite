<?php
// pp($args);
?>

<section class="partnership-section">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html($args['heading']); ?></h2>
        </div>

        <?php if (!empty($args['models'])): ?>
            <div class="partnership-content">
                <?php foreach ($args['models'] as $model): ?>
                    <div class="partnership-box">
                        <?php if (!empty($model['icon'])): ?>
                            <i class="<?php echo esc_attr($model['icon']); ?>"></i>
                        <?php endif; ?>

                        <?php if (!empty($model['title'])): ?>
                            <h3><?php echo esc_html($model['title']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($model['description'])): ?>
                            <p><?php echo esc_html($model['description']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($args['records'])): ?>
            <div class="proven-model">
                <?php if (!empty($args['second_coulmn'])): ?>
                    <h3><?php echo esc_html($args['second_coulmn']); ?></h3>
                <?php endif; ?>
                <div class="model-stats">
                    <?php foreach ($args['records'] as $record): ?>
                        <div class="model-stat">
                            <?php if ( $record['icon'] ) : ?>
                                <i class="<?php echo esc_attr( $record['icon'] ); ?>"></i>
                            <?php endif; ?>
                            <h4 class="counter" data-target="<?php echo esc_attr(str_replace(['+', '%', ','], '', $record['counter'])); ?>">
                                <?php echo esc_html($record['counter']); ?>
                            </h4>
                            <p><?php echo esc_html($record['title']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        initScrollCounter('.model-stats', '.counter');
    });
</script>