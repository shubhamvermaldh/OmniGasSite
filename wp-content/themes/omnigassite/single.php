<?php get_header(); ?>

<main class="main-content">
    <div class="content-area">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta"><?php the_date(); ?> by <?php the_author(); ?></div>
                <div class="entry-content"><?php the_content(); ?></div>
                <?php comments_template(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>