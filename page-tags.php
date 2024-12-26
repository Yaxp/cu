<?php
/*
Template Name: tags
*/
get_header();?>
<main class="">
<article class="mod-archive">
<?php
$tags = get_tags();
foreach ($tags as $key => $value) {
$args = array(
	'posts_per_page'      	=> -1,
	'post_type'           	=> 'post',
	'post_status'			=> 'publish',
	'ignore_sticky_posts'	=> 1,
	'tag_id'				=> $value->term_taxonomy_id,
);
$tagpost = new WP_Query( $args );
?>
<div class="mod-archive-name"><?php echo $value->name; ?></div>
<ul class="mod-archive-list ms-4">
<?php if($tagpost->have_posts()) : ?>
<?php while($tagpost->have_posts()) : $tagpost->the_post() ?>
	<li id="post-<?php the_ID(); ?>"><time class="mod-archive-time text-nowrap me-4" datetime="<?php the_time('m-d h:i:s'); ?>"><?php the_time('m-d'); ?></time><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile;  ?>
<?php endif; wp_reset_query(); ?>
</ul>
<?php } ?>
</article>
</main>
<?php get_footer(); ?>