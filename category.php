<?php get_header();?>
<main class="">
	<h1 class="page_name"><?php single_cat_title(); ?></h1>
	<div class="archives_box">
		<ul class="mod-archive-list">
		<?php while( have_posts() ): the_post(); ?>
			<li id="post-<?php the_ID(); ?>"><time class="mod-archive-time text-nowrap me-4" datetime="<?php the_time('m-d h:i:s'); ?>"><?php the_time('Y-m-d'); ?></time><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
	</div>
	<div class="posts-nav">
		<?php echo paginate_links(array(
		    'prev_next' => 1,
		    'before_page_number' => '',
		    'mid_size' => 2,
		    'prev_text' => __('上页'),
		    'next_text' => __('下页'),
		));
		?>
	</div>
</main>
<?php get_footer(); ?>