<?php
// pp($args);
?>
<style>
    :root{
      --bg:#f6f8fb;
      --card:#ffffff;
      --accent:#0f6fff;
      --muted:#6b7280;
      --radius:14px;
    }
    /* Section wrapper */
    .omni-section{
      margin:0 auto;
      background:linear-gradient(180deg, rgba(255,255,255,0.9), rgba(255,255,255,0.96));
      border-radius:var(--radius);
      padding:28px;
      box-shadow: 0 6px 28px rgba(15,23,42,0.06);
      display:grid;
      grid-template-columns: 1fr 420px;
      gap:24px;
      align-items:center;
    }

    /* Responsive stack */
    @media (max-width:880px){
      .omni-section{ grid-template-columns: 1fr; padding:20px; }
    }

    /* Left content */
    .omni-heading{
      margin:0 0 12px 0;
      font-size:1.5rem;
      letter-spacing:-0.2px;
      font-weight:700;
      display:flex;
      align-items:center;
      gap:12px;
    }

    .badge{
      display:inline-block;
      padding:6px 10px;
      background:linear-gradient(90deg,var(--accent), #2f9bff);
      color:white;
      font-weight:600;
      font-size:0.8rem;
      border-radius:10px;
    }

    .omni-text{
      font-size:0.96rem;
      line-height:1.6;
      color:#111827;
      white-space:pre-wrap; /* keep line-breaks if you paste text */
    }

    .features{
      display:flex;
      flex-wrap:wrap;
      gap:12px 18px;
      margin-top:6px;
    }

    .feature{
      background: #f3f6ff;
      color:#0f4be6;
      padding:8px 12px;
      border-radius:999px;
      font-weight:600;
      font-size:0.85rem;
      box-shadow: 0 1px 0 rgba(15,23,42,0.03) inset;
    }

    /* Right image cluster */
    .image-cluster{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:10px;
      justify-items:center;
      align-items:center;
    }

    .image-cluster img{
      width:100%;
      height:160px;
      object-fit:cover;
      border-radius:12px;
      display:block;
      box-shadow: 0 6px 18px rgba(15,23,42,0.08);
      transition: transform .35s ease, box-shadow .35s ease;
    }

    .image-cluster img:hover{
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 18px 40px rgba(15,23,42,0.14);
    }

    /* Make one image span two rows for an interesting layout */
    .image-cluster .tall{
      grid-row: span 2;
      height:340px;
    }

    @media (max-width:480px){
      .image-cluster img{height:120px}
      .image-cluster .tall{height:180px}
    }

</style>

<?php 
if( !empty($args) ) : 
    $heading = $args['heading'] ?? '';
    $content = $args['content'] ?? '';
    $tags = $args['tags'] ?? [];
    $images = $args['images'] ?? [];
?>
<section class="company-overview">
    <div class="container">
        <div class="omni-section" aria-labelledby="omni-title">
            <div>
                <?php if( !empty($heading) ) : ?>
                    <h2 id="omni-title" class="omni-heading">
                        <span class="badge"><?php echo esc_html($heading); ?></span>
                    </h2>
                <?php endif; ?>

                <?php if( !empty($content) ) : ?>
                    <div class="omni-text"><?php echo $content; ?></div>
                <?php endif; ?>

                <?php if( !empty($tags) ) : ?>
                    <div class="features" aria-hidden="false">
                        <?php foreach( $tags as $tag ) : ?>
                            <?php if( !empty($tag['tag']) ) : ?>
                                <span class="feature"><?php echo esc_html($tag['tag']); ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if( !empty($images) ) : ?>
                <div class="image-cluster" aria-hidden="false">
                    <?php 
                    $i = 0;
                    foreach( $images as $img ) : 
                        $i++;
                        $img_url = esc_url($img['url']);
                        $alt = esc_attr($img['alt'] ?: $img['title']);
                        $class = ($i == 2) ? 'class="tall"' : ''; // second image tall
                    ?>
                        <img <?php echo $class; ?> src="<?php echo $img_url; ?>" alt="<?php echo $alt; ?>" loading="lazy">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
