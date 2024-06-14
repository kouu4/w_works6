<?php

function my_enqueue_scripts()
{
    wp_enqueue_script('bg-switch', get_template_directory_uri() . '/js/bg-switch.js', array('jquery'), null, true);
    wp_localize_script('bg-switch', 'my_vars', array(
        'template_directory_uri' => get_template_directory_uri()

    ));
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');

// 絵文字変換スクリプトを無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// DNSプリフェッチを削除
add_filter('emoji_svg_url', '__return_false');


// カスタム投稿タイプを追加する
function create_post_type()
{
    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('news'),
                'singular_name' => __('news')
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action('init', 'create_post_type');
