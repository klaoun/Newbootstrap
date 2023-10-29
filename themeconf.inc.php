<?php
/*
Theme Name: New Bootstrap Darkroom
Version: auto
Description: A mobile-ready & feature-rich theme based on Boostrap 5, with PhotoSwipe full-screen slideshow, Slick carousel, over 30 color styles and lots of configuration options
Theme URI:
Author:
Author URI:
Has Settings: true
*/
require_once(PHPWG_THEMES_PATH . 'newbootstrap_darkroom/include/themecontroller.php');
require_once(PHPWG_THEMES_PATH . 'newbootstrap_darkroom/include/config.php');

$themeconf = array(
    'name' => 'newbootstrap_darkroom',
    'parent' => 'default',
    'load_parent_css' => false,
    'load_parent_local_head' => true,
    'local_head' => 'local_head.tpl',
);

//debug
//$conf['template_combine_files'] = false;

// always show metadata initially
pwg_set_session_var('show_metadata', true);

// register video files
$video_ext = array('mp4','m4v');
$conf['file_ext'] = array_merge ($conf['file_ext'], $video_ext, array_map('strtoupper', $video_ext));

$controller = new \newBootstrapDarkroom\ThemeController();
$controller->init();
