<?php

//ajax评论
require get_template_directory(). '/inc/comment/main.php';

//后台缩略图
require get_template_directory(). '/inc/thumbnails.php';

//wp优化
require get_template_directory(). '/inc/index.php';

//基础
require get_template_directory(). '/inc/norm.php';

//注册导航
register_nav_menus(
	array(
	'main'     => __( '主菜单导航' ),
	)
);

