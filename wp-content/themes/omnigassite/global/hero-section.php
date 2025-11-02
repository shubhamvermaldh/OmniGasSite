<?php
// pp($args);
?>

<style>
    .hero-section {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        min-height: 80vh;
        font-family: "Poppins", sans-serif;
        padding: 0;
    }

    /* LEFT SIDE */
    .hero-left {
        flex: 2;
        /* background: url("assets/images/lpg_gas_plant_indust_a5fd5858.jpg") center/cover no-repeat; */
        position: relative;
        color: white;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 60px;
    }

    .hero-content {
        padding: 10px;
        background-color: #3575e87d;
        border-radius: 20px;
    }

    .hero-content h1 {
        font-size: 3rem;
        line-height: 1.2;
        max-width: 400px;
    }

    .hero-content .btn {
        margin-top: 20px;
    }

    /* RIGHT SIDE */
    .hero-right {
        flex: 1;
        background-color: #3575e8;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
    }

    .overview-box {
        max-width: 400px;
    }

    .overview-box h4 {
        font-size: 14px;
        letter-spacing: 2px;
        margin-bottom: 10px;
        color: #9aa3c0;
    }

    .overview-box p {
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .overview-images {
        display: flex;
        gap: 10px;
    }

    .overview-images img {
        width: 125px;
        height: 70px;
        object-fit: cover;
        border-radius: 5px;
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
        .hero-section {
            flex-direction: column;
        }

        .hero-left,
        .hero-right {
            flex: none;
            width: 100%;
            min-height: 50vh;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }
    }
</style>
<?php
if (!empty($args)) :
    $heading = $args['heading'] ?? '';
    $overview = $args['overview'] ?? '';
    $link = $args['link']['url'] ?? '#';
    $link_title = $args['link']['title'] ?? '';
    $background = $args['background_image']['url'] ?? '';
    $images = $args['images'] ?? [];
?>
    <section class="hero-section" style="background-image: url('<?php echo esc_url($background); ?>');">
        <div class="hero-left">
            <div class="hero-content">
                <?php if (!empty($heading)) : ?>
                    <h1><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if (!empty($link_title)) : ?>
                    <a href="<?php echo esc_url($link); ?>" class="btn btn-secondary">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="hero-right">
            <?php if (!empty($overview)) : ?>
                <div class="overview-box">
                    <h4>OVERVIEW</h4>
                    <p><?php echo esc_html($overview); ?></p>

                    <?php if (!empty($images)) : ?>
                        <div class="overview-images">
                            <?php foreach ($images as $img) : ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>