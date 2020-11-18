<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Stock Return Calculator with React
 * Description:       Custom Plugin made with React to calculate stock return. shortcode [stock_return_react]
 * Version:           1.0.0
 * Author:            Areeb Vohra
 * Author URI:        https://areebvohra.github.io/
 */

defined('ABSPATH') or die('Direct script access disallowed.');

define('STC_WIDGET_PATH', plugin_dir_path(__FILE__) . '/widget');
define('STC_ASSET_MANIFEST', STC_WIDGET_PATH . '/build/asset-manifest.json');
define('STC_INCLUDES', plugin_dir_path(__FILE__) . '/includes');

require_once(STC_INCLUDES . '/enqueue.php');
require_once(STC_INCLUDES . '/shortcode.php');
