<?php
/*
    Template Name: Global
*/
?>
<?php
get_header(); 
if($sections = get_field('global')){
?>
<main class="main-content">
    <?php
    while (have_posts()): the_post();
        // ACF - Flexible Content fields.
        if ($sections):
            $used_layouts = [];
            foreach ($sections as $section):
                $template = str_replace('_', '-', $section['acf_fc_layout'] ?? '');
                $repeat = in_array($template, $used_layouts);
                $section['section_repeat'] = $repeat;
                get_template_part('global/' . $template, '', $section);
                $used_layouts[] = $template;
            endforeach;
        endif;
    endwhile;
    ?>
</main>
<?php
}
get_footer();
?>