<style>
  .blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    padding: 80px 0;
  }

  .blog-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: 0.3s;
  }

  .blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
  }

  .blog-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }

  .blog-content {
    padding: 20px;
  }

  .blog-content h3 {
    font-size: 20px;
    margin: 10px 0;
    color: #222;
  }

  .blog-content p {
    color: #555;
    line-height: 1.6;
    font-size: 14px;
  }

  .blog-meta {
    font-size: 13px;
    color: #888;
    margin-bottom: 10px;
  }

  .read-more {
    display: inline-block;
    color: #1a237e;
    font-weight: 600;
    margin-top: 10px;
    text-decoration: none;
  }

  .read-more:hover {
    text-decoration: underline;
  }
  .blog-section{
    padding: 2rem 0;
  }
</style>
<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            <?php
            // Setup paged variable for pagination
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Query latest blog posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 12, // change to your desired number per page
                'paged'          => $paged,
                'post_status'    => 'publish',
            );

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $author = get_the_author();
                    $date = get_the_date('F j, Y');
                    $excerpt = wp_trim_words(get_the_excerpt(), 25, '...');
                    ?>
                    
                    <div class="blog-card">
                        <?php if ($featured_img): ?>
                            <img src="<?php echo esc_url($featured_img); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                        
                        <div class="blog-content">
                            <div class="blog-meta">
                                <?php echo esc_html($date); ?> | <?php echo esc_html($author); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html($excerpt); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
                        </div>
                    </div>

                <?php endwhile; ?>

        </div> <!-- end .blog-grid -->

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total'   => $blog_query->max_num_pages,
                'current' => $paged,
                'prev_text' => '← Prev',
                'next_text' => 'Next →',
            ));
            ?>
        </div>

        <?php
            else :
                echo '<p>No blog posts found.</p>';
            endif;
            wp_reset_postdata();
            ?>
    </div>
</section>