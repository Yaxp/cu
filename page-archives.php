<?php
/*
Template Name: archives
*/
get_header();?>
<main class="">
<article class="mod-archive">
<?php
$posts = get_posts(array(
    'numberposts' => -1,
    'post_status' => 'publish'
));
$archives = array();
foreach ($posts as $post) {
    $year = get_the_date('Y', $post);
    $archives[$year][] = array(
        'title' => get_the_title($post),
        'permalink' => get_permalink($post),
        'date' => get_the_date('m-d', $post),
        'post_id' => 'post-' . $post->ID
    );
}
foreach ($archives as $year => $posts) {
    echo '<div id="year-'.$year.'" class="mod-archive-name">'.$year.'</div>';
    echo '<ul class="mod-archive-list ms-4">';
    foreach ($posts as $post) {
        echo '<li class="' . $post['post_id'] . '"><time class="mod-archive-time text-nowrap me-4" datetime="'.$post['date'].'">'.$post['date'].'</time><a href="'.$post['permalink'].'" title="'.$post['title'].'">'.$post['title'].'</a></li>';
    }
    echo '</ul>';
}
?>
</article>
</main>
<?php get_footer(); ?>