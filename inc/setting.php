<?php

//Wordpress界最屌的大叔 - 疯狂的大叔 自定义 customize
//相关参数：
//https://codex.wordpress.org/Theme_Customization_API
//https://codex.wordpress.org/Plugin_API/Action_Reference/customize_register
//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
//https://developer.wordpress.org/reference/classes/wp_customize_control/
//echo get_theme_mod()

add_action('customize_register', 'ds_theme_customizer');
function ds_theme_customizer( WP_Customize_Manager $wp_customize){


////////////////////////////////////////////////////////adding section in wordpress customizer   
$wp_customize->add_section('ds_setting_index', array(
	'title'			=> 'HUiTHEME 综合设置',
	'description'	=> '感谢您选择Cu，有任何疑问请前往<a href="https://www.huitheme.com/" target="_blank">HUiTHEME</a>寻求帮助。',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_logo', array(
    'default'       => '',
    'transport'     => 'refresh',
));

$wp_customize->add_control('ds_logo', array(
    'label'         => '站点logo URL',
    'section'       => 'ds_setting_index',
    'settings'      => 'ds_logo',
    'type'          => 'url',  // 将类型设置为 URL
    'description'   => '输入站点logo的URL',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_site_name', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_site_name', array(
	'label'   		=> '网站名称',
	'section' 		=> 'ds_setting_index', //设置组
	'type'    		=> 'text',
	'description'	=> '显示在logo右侧的网站名称，纯图片logo可不填写。',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_site_txt', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_site_txt', array(
	'label'			=> '博主描述',
	'section'		=> 'ds_setting_index',//设置组
	'type'			=> 'textarea',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_beian', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_beian', array(
	'label'   		=> '站点备案号',
	'section' 		=> 'ds_setting_index', //设置组
	'type'    		=> 'text',
	'description'	=> '在网站底部的右边展现备案号',
));


////////////////////////////////////////////////////////one setting
 $wp_customize->add_setting('ds_beian_url', array(
    'default'		=> '',
    'transport'		=> 'refresh', //默认值refresh

));
$wp_customize->add_control( 'ds_beian_url', array(
    'label'			=> '备案号超链接',
    'section'		=> 'ds_setting_index',
    'type'			=> 'checkbox',
    'description'	=> '备案号是否可点击去到工信部官网，勾选则跳转。',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_header', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'ds_header',array(
	'label'      	=> '页头代码',
	'section'    	=> 'ds_setting_index',//设置组
	'settings'   	=> 'ds_header',
	'description'	=> '在页头插入代码',
))
);


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_footer', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'ds_footer',array(
	'label'      	=> '页脚代码',
	'section'    	=> 'ds_setting_index',//设置组
	'settings'   	=> 'ds_footer',
	'description'	=> '在页脚插入代码',
))
);




////////////////////////////////////////////////////////adding section in wordpress customizer     
$wp_customize->add_section('ds_setting_seo', array(
	'title'			=> 'HUiTHEME SEO设置',
	'description'	=> '感谢您选择Cu，有任何疑问请前往<a href="https://www.huitheme.com/" target="_blank">HUiTHEME</a>寻求帮助。',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_seo_t', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_seo_t', array(
	'label'   		=> '首页标题',
	'section' 		=> 'ds_setting_seo', //设置组
	'type'    		=> 'text',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_seo_d', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_seo_d', array(
	'label'   		=> '首页描述',
	'section' 		=> 'ds_setting_seo', //设置组
	'type'    		=> 'textarea',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_seo_k', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_seo_k', array(
	'label'   		=> '首页关键词',
	'section' 		=> 'ds_setting_seo', //设置组
	'type'    		=> 'text',
));


////////////////////////////////////////////////////////one setting
$wp_customize->add_setting('ds_seo_fgf', array(
	'default'		=> '',
	'transport'		=> 'refresh', //默认值refresh
));
$wp_customize->add_control('ds_seo_fgf', array(
	'label'   		=> '分隔符',
	'section' 		=> 'ds_setting_seo', //设置组
	'type'    		=> 'text',
	'description'	=> '标题和站点名之间的分隔符号',
));


}