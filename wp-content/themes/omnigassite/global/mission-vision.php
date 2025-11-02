<?php
// pp($args);
?>
<?php if (!empty($args)) : ?>
<section class="about-content">
    <div class="container">

        <?php if (!empty($args['heading'])) : ?>
            <div class="about-intro">
                <h2><?php echo esc_html($args['heading']); ?></h2>

                <?php if (!empty($args['content'])) : ?>
                    <div class="lead">
                        <?php echo wpautop(wp_kses_post($args['content'])); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($args['scope'])) : ?>
            <div class="mission-vision">
                <?php foreach ($args['scope'] as $item) : 
                    $icon = !empty($item['icon']) ? esc_attr($item['icon']) : '';
                    $title = !empty($item['heading']) ? esc_html($item['heading']) : '';
                    $desc = !empty($item['description']) ? esc_html($item['description']) : '';
                ?>
                    <div class="mv-card">
                        <?php if ($icon) : ?>
                            <div class="mv-icon"><i class="<?php echo $icon; ?>"></i></div>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if ($desc) : ?>
                            <p><?php echo $desc; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
