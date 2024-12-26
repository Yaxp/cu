<?php
/*
Template Name: links
*/
?>
<?php get_header(); ?>
<article class="mod-archive">
<?php
$categories = get_terms('link_category');
foreach ($categories as $category) {
    echo '<div class="mod-archive-name">' . $category->name . '</div>';
    $bookmarks = get_bookmarks(array('category' => $category->term_id));
    if ($bookmarks) {
        echo '<div class="row row-cols-1 row-cols-sm-2 g-4 mb-4 pb-2">';
        foreach ($bookmarks as $bookmark) {
            echo '<div class="col"><div class="mod-archive-links"><a class="stretched-link" href="' . $bookmark->link_url . '" rel="external nofollow" target="_blank" title="'.$bookmark->link_name.'">' . $bookmark->link_name . '<small>'.$bookmark->link_notes.'</small></a><p>'.$bookmark->link_description.'</p></div></div>';
        }
        echo '</div>';
    } else {
        echo '<p>没有链接。</p>';
    }
}
?>
</article>
<?php get_footer(); ?>
