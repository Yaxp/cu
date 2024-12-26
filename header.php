<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="date=no">
<?php include('inc/seo.php') ?>
<?php wp_head(); ?>
<?php echo get_theme_mod('ds_header'); ?>
</head>
<body <?php body_class(); ?> >
<?php if (is_home()) { } else { ?>
<div class="container g-4">
<div class="row justify-content-center">
<div class="col-lg-6">
	<div class="logo_box">
		<h1 class="logo">
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				<img src="<?php echo get_theme_mod('ds_logo') ?>" alt="">
			</a>
        </h1>
        <?php wp_nav_menu(
            array(
            'theme_location'  => 'main',
            'container'       => 'nav',
            'container_class' => 'primary',
            'menu_class'      => 'menu-ul no-home-menu',
            'menu_id'         => 'menu-ul',
            'depth'           => 1,
            )
        );
        ?>
	</div>
<?php } ?>