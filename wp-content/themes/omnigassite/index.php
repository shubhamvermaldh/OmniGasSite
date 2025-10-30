<?php get_header(); ?>

<main class="main-content">
    <div class="content-area">
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-meta"><?php the_date(); ?> by <?php the_author(); ?></div>
                <div class="entry-summary"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile;

        the_posts_pagination();
    else :
        get_template_part( '404' );
    endif; ?>
    </div>
</main>

<?php get_footer(); ?>