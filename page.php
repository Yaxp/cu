<?php get_header();?>
<main class="">
    <h1 class="page_name"><?php the_title(); ?></h1>
    <?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
    <article class="wznrys">
    <?php the_content(); ?>
    </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>