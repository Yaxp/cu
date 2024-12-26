<?php get_header(); ?>
<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="index_box">
                    <div class="index_box_img">
                        <img src="<?php echo get_theme_mod('ds_logo') ?>" alt="">
                    </div>
                    <h1><?php echo get_theme_mod('ds_site_name') ?></h1>
                    <p><?php echo get_theme_mod('ds_site_txt') ?></p>
                    <?php wp_nav_menu(
                        array(
                        'theme_location'  => 'main',
                        'container'       => 'nav',
                        'container_class' => 'primary',
                        'menu_class'      => 'menu-ul',
                        'menu_id'         => 'menu-ul',
                        'depth'           => 1,
                        )
                    );
                    ?>
                    <address>
                        <?php if( get_theme_mod('ds_beian_url') ): ?>
                        <a href="http://beian.miit.gov.cn/" rel="external nofollow" target="_blank">
                        <?php endif; ?>
                            <i class="bi bi-shield-check me-1">
                            <span></i><?php echo get_theme_mod('ds_beian') ?></span>
                        <?php if( get_theme_mod('ds_beian_url') ): ?>
                        </a>
                        <?php endif; ?>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

