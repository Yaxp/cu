<?php get_header();?>
<main class="">
    <h1 class="page_name mb-3"><?php the_title(); ?></h1>
    <div class="single_info mb-4 pb-2 text-secondary f12 f300">
        <span>Time:<?php the_time('Y-m-d'); ?></span>
        <i class="mx-2">/</i>
        <span>View:<?php post_views('',''); ?></span>
        <i class="mx-2">/</i>
        <span>Category:<?php the_category(', '); ?></span>
    </div>
    <?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
    <article class="wznrys mb-4">
    <?php the_content(); ?>
    </article>
    <?php endwhile; ?>

    <?php if (get_the_tags()) { ?>
    <div class="single_tag">
        <?php the_tags('<span>#</span>','<span>#</span>',''); ?>
    </div>
    <?php } ?>
    <div class="previous_next">
        <div class="row row-cols-2 g-4">
            <div class="col">
                <?php if (get_next_post()) { next_post_link('上一篇: %link');} else {echo "已是最新文章";} ?>
            </div>
            <div class="col">
                <?php if (get_previous_post()) { previous_post_link('下一篇: %link');} else {echo "已是最后文章";} ?>
            </div>
        </div>
    </div>
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
</main>
<?php get_footer(); ?>