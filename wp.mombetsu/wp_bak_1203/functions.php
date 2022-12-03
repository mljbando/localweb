<?php
/*-------------------------------------------*/
/*  初期設定
/*-------------------------------------------*/

/**
 * 共通JS/CSS
 */
function org_scripts()
{
  wp_enqueue_style('boom', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/bootstrap.min.css', array(), '', 'all');
  wp_enqueue_style('swic', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/swiper-bundle.min.css', array(), '', 'all');
  wp_enqueue_style('booi', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/bootstrap-icons.css', array(), '', 'all');
  //wp_enqueue_style('them', 'https://mombetsu.furusato-direct.jp/html/user_data/assets/css/themify-icons.css', array(), '', 'all');
  wp_enqueue_style('them', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/themify-icons.css', array(), '', 'all');
  wp_enqueue_style('aosc', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/aos.css', array(), '', 'all');
  wp_enqueue_style('dest', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/destyle.css', array(), '', 'all');
  wp_enqueue_style('orgc', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/org.css', array(), '', 'all');
  wp_enqueue_style('comm', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/css/common.css', array(), '', 'all');

  wp_enqueue_script('boob', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/js/bootstrap.bundle.min.js', array(), '', true);
  wp_enqueue_script('aosj', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/js/aos.js', array(), '', true);
  wp_enqueue_script('swij', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/js/swiper-bundle.min.js', array(), '', true);
  wp_enqueue_script('jque', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/js/jquery-3.6.1.min.js', array(), '', true);
  wp_enqueue_script('comn', 'https://mombetsu.furusato-direct.jp/wp-content/themes/wp.mombetsu.furusato-direct.jp/assets/js/common.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'org_scripts');


/**
 * 下書きプレビュー権限
 */
function replace_preview_post_link ( $url ) {
  $replace_url = str_replace('https://mombetsu.furusato-direct.jp/', 'https://wp.mombetsu.furusato-direct.jp/', $url);
  return $replace_url;
}
add_filter('preview_post_link', 'replace_preview_post_link');


/**
 * <title>タグを自動表示
 */
add_filter('document_title_separator', 'change_document_title_separator');
function change_document_title_separator($separator)
{
  return ' | ';
}

/**
 * PHPメモリー上限
 */
ini_set('memory_limit', '256M');

/**
 * delete : wp_head
 */
remove_action('wp_head', 'wp_generator'); //WP ver.
remove_action('wp_head', 'feed_links_extra', 3); //RSS
remove_action('wp_head', 'rsd_link'); //XML-RPC RSD
remove_action('wp_head', 'wp_shortlink_wp_head'); //shortlink
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); //prev next link
remove_action('wp_head', 'wlwmanifest_link'); //wlwmanifest
remove_action('wp_head', 'rest_output_link_wp_head', 10); //api.w.org link
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10); //api.w.org link
remove_action('template_redirect', 'rest_output_link_header', 11, 0); //api.w.org link
remove_action('wp_head', 'print_emoji_detection_script', 7); //emoji
remove_action('wp_print_styles', 'print_emoji_styles'); //emoji
remove_action('wp_head', 'rest_output_link_wp_head'); //REST API
remove_action('wp_head', 'wp_resource_hints', 2); //dns-prefetch
remove_filter('wp_robots', 'wp_robots_noindex'); //wp_robots
remove_filter('wp_robots', 'wp_robots_noindex_embeds'); //wp_robots
remove_filter('wp_robots', 'wp_robots_noindex_search'); //wp_robots
remove_filter('wp_robots', 'wp_robots_max_image_preview_large'); //wp_robots

/**
 * delete : global-styles-inline-css
 */
add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
  wp_dequeue_style('global-styles');
}

/**
 * delete : default jquery
 */
function my_scripts_method()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

/**
 * delete : wp-block-library
 */
function disable_gutenberg_css()
{
  wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'disable_gutenberg_css', 1000);

/**
 * 外観＞メニューを表示
 */
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}
/**
 * 固定ページをダッシュボードに表示
 */
add_action('admin_menu', function () {
  add_menu_page('紋別のこと', '紋別のこと', 'read', 'post.php?post=7&action=edit', '', 'dashicons-admin-page', 5);
});
add_action('admin_menu', function () {
  add_menu_page('紋別の土産', '紋別の土産', 'read', 'post.php?post=68&action=edit', '', 'dashicons-admin-page', 6);
});
add_action('admin_menu', function () {
  add_menu_page('紋別の夜', '紋別の夜', 'read', 'post.php?post=69&action=edit', '', 'dashicons-admin-page', 7);
});
add_action('admin_menu', function () {
  add_menu_page('紋別の宿', '紋別の宿', 'read', 'post.php?post=70&action=edit', '', 'dashicons-admin-page', 8);
});

/**
 *  【管理画面】CPT UI　特定postでビジュアルエディターを非表示
 */
function disable_visual_editor_in_page_individual()
{
  global $typenow;
  if ($typenow == 'spot') { //紋別の観光
    $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
    echo $hide_postdiv_css;
  }
  global $typenow;
  if ($typenow == 'gourmet') { //紋別のグルメ
    $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
    echo $hide_postdiv_css;
  }
}
add_action('load-post.php', 'disable_visual_editor_in_page_individual');
add_action('load-post-new.php', 'disable_visual_editor_in_page_individual');

/**
 *  【管理画面】固定ページで特定ページのビジュアルエディターを非表示
 */
//function disable_visual_editor_in_page_individual()
//{
//  global $typenow;
//  $post_id = $_GET['post'];
//  if ($typenow == 'page') {
//    if (in_array($post_id, array('7', '68', '69', '70', '12'), true)) {
//      $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
//      echo $hide_postdiv_css;
//    }
//  }
//}
//add_action('load-post.php', 'disable_visual_editor_in_page_individual');
//add_action('load-post-new.php', 'disable_visual_editor_in_page_individual');
