<?php
/*
Plugin Name: フロント管理バー配色
Description: フロント管理バー配色を設定するプラグイン
Version: 1.0.0
Author: kokarare1212
*/

if(!defined('ABSPATH')) exit();

function frontAdminbarColor() {
    if(is_admin_bar_showing() && !is_admin()){
        global $wp_version;
        wp_enqueue_style('admin-bar-color-css', admin_url('/css/colors/' . get_user_option('admin_color') . '/colors.min.css'), [], $wp_version);
    }
}

add_action('wp_enqueue_scripts', 'frontAdminbarColor');
