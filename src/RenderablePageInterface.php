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

namespace TypistTech\WPTabbedAdminPages;

interface RenderablePageInterface
{
    /**
     * The slug name to refer to this menu by in snake_case.
     *
     * @return string
     */
    public function getSnakeCaseMenuSlug(): string;

    /**
     * Render page specific content.
     *
     * @return void
     */
    public function render();

    /**
     * The text to be used for the menu.
     *
     * @return string
     */
    public function getPageTitle(): string;
}
