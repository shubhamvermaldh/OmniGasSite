<?php
// pp($args);
$background = $args['background_image']['url'] ?? '';
?>
<section class="conversion-model" 
    style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
    url('<?php echo esc_url($background); ?>') center/cover no-repeat fixed;">
    <div class="container">
        <div class="section-header" style="color: white;">
            <?php if (!empty($args['heading'])): ?>
                <h2 style="color: white;"><?php echo esc_html($args['heading']); ?></h2>
            <?php endif; ?>
        </div>

        <div class="conversion-content">
            <?php if (!empty($args['models'])): ?>
                <div class="conversion-features">
                    <?php foreach ($args['models'] as $model): ?>
                        <div class="feature-box">
                            <?php if ( $model['icon'] ) : ?>
                                <i class="<?php echo esc_attr( $model['icon'] ); ?>"></i>
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

            <?php if (!empty($args['conversion'])): ?>
                <div class="conversion-stats">
                    <?php foreach ($args['conversion'] as $stat): ?>
                        <div class="stat-box">
                            <h3 class="counter" data-target="<?php echo esc_attr(str_replace(['+', '%', ','], '', $stat['counter'])); ?>">
                                <?php echo esc_html($stat['counter']); ?>
                            </h3>
                            <p><?php echo esc_html($stat['title']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        initScrollCounter('.conversion-stats', '.counter');
    });
</script>
