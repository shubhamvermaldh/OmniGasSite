<?php if ( post_password_required() ) {
    return;
}

if ( have_comments() ) : ?>
    <h2 class="comments-title"><?php comments_number(); ?></h2>
    <ol class="comment-list">
        <?php wp_list_comments(); ?>
    </ol>
<?php endif; ?>

<?php comment_form(); ?>