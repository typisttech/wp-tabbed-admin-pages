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

declare(strict_types=1);

echo '<h3>You are now on: ' . esc_html($context->getMenuTitle()) . '</h3>';
echo '<strong>Of course you want to use different views for different pages in real life.</strong>';

foreach (range(1, 100) as $_index) {
    echo '<p><kbd>All work and no play makes Jack a dull boy.</kbd></p>';
}
