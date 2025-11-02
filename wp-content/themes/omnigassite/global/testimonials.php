<?php
// pp($args);
?>

<style>
  .testimonial-section {
    padding: 80px 0;
    background: #ffffff;
  }

  .section-title {
    text-align: center;
    font-size: 32px;
    color: #1a237e;
    margin-bottom: 50px;
    font-weight: 700;
  }

  .testimonial-item {
    background: #f9fafc;
    border-radius: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    padding: 30px 20px;
    text-align: center;
    margin: 10px;
    transition: all 0.3s ease;
  }

  .testimonial-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
  }

  .testimonial-content p {
    font-style: italic;
    color: #555;
    line-height: 1.6;
    margin-bottom: 25px;
  }


  .testimonial-author h4 {
    font-size: 18px;
    color: #1a237e;
    margin: 5px 0;
  }

  .testimonial-author span {
    color: #777;
    font-size: 14px;
  }
</style>

<?php if (!empty($args['testimonials'])) : ?>
<section class="testimonial-section">
  <div class="container">
    <div class="section-header">
      <h2><?php echo esc_html($args['heading']); ?></h2>
    </div>

    <div class="owl-carousel testimonial-slider">
      <?php foreach ($args['testimonials'] as $testimonial) : ?>
        <div class="testimonial-item">
          <div class="testimonial-content">
            <p>“<?php echo esc_html($testimonial['comment']); ?>”</p>
          </div>
          <div class="testimonial-author">
            <?php if (!empty($testimonial['image'])) : ?>
              <img src="<?php echo esc_url($testimonial['image']); ?>" alt="<?php echo esc_attr($testimonial['name']); ?>">
            <?php endif; ?>
            <h4><?php echo esc_html($testimonial['name']); ?></h4>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
