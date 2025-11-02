<?php
// pp($args);
?>
<?php if (!empty($args)) : ?>
<section class="about-content">
    <div class="container">
        <div class="why-choose">
            <?php if (!empty($args['heading'])) : ?>
                <h2><?php echo esc_html($args['heading']); ?></h2>
            <?php endif; ?>

            <?php if (!empty($args['technologies'])) : ?>
                <div class="choose-grid">
                    <?php foreach ($args['technologies'] as $item) : ?>
                        <div class="choose-item">
                            <div class="choose-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="choose-content">
                                <?php if (!empty($item['heading'])) : ?>
                                    <h4><?php echo esc_html($item['heading']); ?></h4>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])) : ?>
                                    <p><?php echo esc_html($item['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
