<?php
// pp($args);
?>
<?php if (!empty($args)) : 
    $bg_image = !empty($args['background_image']['url']) ? esc_url($args['background_image']['url']) : '';
?>
<section class="page-header" 
    style="background: linear-gradient(135deg, rgba(30, 64, 175, 0.50) 0%, rgba(59, 130, 246, 0.95) 100%), 
    url('<?php echo $bg_image; ?>') center/cover no-repeat;">
    <div class="container">
        <?php if (!empty($args['title'])) : ?>
            <h1><?php echo esc_html($args['title']); ?></h1>
        <?php endif; ?>

        <?php if (!empty($args['description'])) : ?>
            <p><?php echo esc_html($args['description']); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
