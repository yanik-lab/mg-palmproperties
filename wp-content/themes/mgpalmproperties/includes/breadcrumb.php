<?php

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb()
{

    if (is_singular('propriete')) {
        echo '<a href="' . pll_get_the_permalink(22) . '" rel="nofollow">'  . pll_get_the_title(22) . '</a>';
        echo "&nbsp;&#187;&nbsp;";
        echo "<span>" . get_the_title() . "</span>";
    }
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo "<span>" . get_the_title() . "</span>";
    // } elseif (is_singular('accessoire-exterieur')) {
    //     $post_type = get_post_type();
    //     $post_type_labels = get_post_type_labels(get_post_type_object($post_type));
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo '<a href="' . esc_url(get_post_type_archive_link($post_type)) . '">' . esc_html($post_type_labels->name) . '</a>';
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo "<span>" . get_the_title() . "</span>";
    // } elseif (is_singular('exterieur')) {
    //     $postID = get_the_ID();
    //     $gamme = get_field('gamme', $postID);
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo '<a href="' . esc_url(pll_get_term_link($gamme->term_id)) . '">' . $gamme->name . '</a>';
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo "<span>" . get_the_title() . "</span>";
    // } elseif (is_singular('parquet')) {
    //     $postID = get_the_ID();
    //     $gammes = get_field('gamme', $postID);
    //     $gammes_parents = array_filter($gammes, function ($gamme) {
    //         return $gamme->parent === 0;
    //     });
    //     $outputName = '';
    //     $outputID = '';
    //     foreach ($gammes_parents as $gamme) {
    //         $outputName .= $gamme->name . '';
    //         $outputID .= $gamme->term_id . '';
    //     }
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo '<a href="' . esc_url(pll_get_term_link($outputID)) . '">' . $outputName . '</a>';
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo "<span>" . get_the_title() . "</span>";
    // } elseif (is_singular('post')) {
    //     $post_type = get_post_type();
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo '<a href="' . esc_url(pll_get_the_permalink(18)) . '">' . esc_html(pll_get_the_title(18)) . '</a>';
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo "<span>" . get_the_title() . "</span>";
    // } else {
    //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    //     echo get_the_title();
    // }
}
