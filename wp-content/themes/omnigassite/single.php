<?php get_header(); ?>

<style>
.single-blog{
    padding: 80px 0;
}
.blog-header img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 25px;
}

.blog-meta {
  color: #888;
  font-size: 14px;
  margin-bottom: 25px;
}

.blog-content p {
  font-size: 16px;
  line-height: 1.8;
  color: #444;
  margin-bottom: 20px;
}

.related-posts {
  margin-top: 50px;
}

.related-posts h2 {
  margin-bottom: 20px;
}

.related-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.related-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: 0.3s;
}

.related-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

.related-card img {
  width: 100%;
  height: 160px;
  object-fit: cover;
}

.related-card .text {
  padding: 15px;
}

.related-card h4 {
  font-size: 18px;
  margin-bottom: 10px;
}

.related-card a {
  color: #1a237e;
  text-decoration: none;
  font-weight: 600;
}
.related-card a:hover {
  text-decoration: underline;
}
</style>
<div class="single-blog">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="blog-header">
                    <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                </div>
            <?php endif; ?>

            <!-- Title and Meta -->
            <h1><?php the_title(); ?></h1>
            <div class="blog-meta">
                <?php echo get_the_date('F j, Y'); ?> | <?php the_author(); ?>
            </div>

            <!-- Content -->
            <div class="blog-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>

        <!-- Related Posts -->
        <div class="related-posts">
            <h2>Related Articles</h2>
            <div class="related-grid">

                <?php
                // Fetch related posts from same category
                $categories = wp_get_post_categories(get_the_ID());
                if ($categories) {
                    $related_args = array(
                        'category__in'   => $categories,
                        'post__not_in'   => array(get_the_ID()),
                        'posts_per_page' => 3,
                        'orderby'        => 'rand'
                    );

                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                            $related_img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                            <div class="related-card">
                                <?php if ($related_img): ?>
                                    <img src="<?php echo esc_url($related_img); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                                <div class="text">
                                    <h4><?php the_title(); ?></h4>
                                    <a href="<?php the_permalink(); ?>">Read More →</a>
                                </div>
                            </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No related posts found.</p>';
                    endif;
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>