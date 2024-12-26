<?php
//文章自动在中英文之间加入空格。
function add_single_space_between_chinese_and_english($content) {
    $content = preg_replace('/([\x{4e00}-\x{9fff}])([\x{0021}-\x{007e}])/u', '$1 $2', $content);
    $content = preg_replace('/([\x{0021}-\x{007e}])([\x{4e00}-\x{9fff}])/u', '$1 $2', $content);
    return $content;
}
add_filter('the_content', 'add_single_space_between_chinese_and_english');

// 高效生成随机小写字母的随机字符串
function generate_random_slug($length = 12) {
    static $characters = 'abcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($characters), 0, $length);
}

// 确保生成唯一别名
function generate_unique_slug($length = 12) {
    global $wpdb;

    // 使用循环直到生成唯一的别名
    do {
        $random_slug = generate_random_slug($length);
        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT post_name FROM $wpdb->posts WHERE post_name = %s LIMIT 1",
            $random_slug
        ));
    } while ($exists);

    return $random_slug;
}

function set_random_post_slug($post_id) {
    // 检查是否是自动保存或非文章类型
    if (defined('DOING_AUTOSAVE') || 'post' !== get_post_type($post_id)) {
        return;
    }

    // 检查别名是否已存在
    if (!empty(get_post_field('post_name', $post_id))) {
        return;
    }

    // 生成唯一的随机别名
    $unique_slug = generate_unique_slug();
    remove_action('save_post', 'set_random_post_slug'); // 防止递归触发
    wp_update_post([
        'ID'        => $post_id,
        'post_name' => $unique_slug,
    ]);
    add_action('save_post', 'set_random_post_slug'); // 恢复钩子
}

// 在文章保存时触发随机别名生成
add_action('save_post', 'set_random_post_slug');