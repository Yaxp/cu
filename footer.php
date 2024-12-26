<?php if (is_home()) { } else { ?>
<footer id="footer">
Copyright © <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.<p>由 <a href="https://cn.wordpress.org/">WordPress</a> 驱动 · 由 <a href="https://www.huitheme.com/">HUITHEME</a> 主题构建</p>
	<?php if( get_theme_mod('ds_beian_url') ): ?>
    <a href="http://beian.miit.gov.cn/" rel="external nofollow" target="_blank"><i class="bi bi-shield-check me-1" style="-webkit-user-select: none; -webkit-touch-callout: none;"></i>
    <?php endif; ?>
    <?php echo get_theme_mod('ds_beian') ?>
    <?php if( get_theme_mod('ds_beian_url') ): ?>
    </a>
    <?php endif; ?>
</footer>
<button class="scrollToTopBtn" title="返回顶部"><i class="bi bi-chevron-up"></i></button>
</div><!-- header col-lg-6 -->
</div><!-- header row -->
</div><!-- header container -->
<?php } ?>
<?php echo get_theme_mod('ds_footer'); ?>
<?php wp_footer();?>
</body>
</html>