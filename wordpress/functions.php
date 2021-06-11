<?php
require_once STYLESHEETPATH . '/includes/constants.php';
require_once THEME_INCLUDES_PATH . '/autoload.php';
require_once THEME_INCLUDES_PATH . '/vendor/autoload.php';
// include('includes/setup-ssl.php');
include('includes/my_wp_is_mobile.php');
include('includes/modify-link-view-info.php');
Theme::init();
