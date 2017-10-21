<?php
/**
 * WP Tabbed Admin Pages
 *
 * Create WordPress admin pages with tabbed navigations, the OOP way.
 *
 * @package   TypistTech\WPTabbedAdminPages
 *
 * @author    Typist Tech <wp-tabbed-admin-pages@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://www.typist.tech/projects/wp-tabbed-admin-pages
 * @see       https://github.com/TypistTech/wp-tabbed-admin-pages
 */

/**
 * Plugin Name: WP Tabbed Admin Pages
 * Plugin URI:  https://github.com/TypistTech/wp-tabbed-admin-pages
 * Description: Example Plugin for WP Tabbed Admin Pages
 * Version:     0.1.0
 * Author:      Tang Rufus
 * Author URI:  https://www.typist.tech/
 * Text Domain: wp-tabbed-admin-pages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

require_once __DIR__ . '/vendor/autoload.php';
