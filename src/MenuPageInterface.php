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

interface MenuPageInterface extends RenderablePageInterface, TabbablePageInterface
{
    /**
     * The text to be displayed in the title tags of the page when the menu is selected.
     *
     * @return string
     */
    public function getPageTitle(): string;

    /**
     * The text to be used for the menu.
     *
     * @return string
     */
    public function getMenuTitle(): string;

    /**
     * The slug name to refer to this menu by (should be unique for this menu).
     *
     * @return string
     */
    public function getMenuSlug(): string;

    /**
     * The capability required for this menu to be displayed to the user.
     *
     * @return string
     */
    public function getCapability(): string;

    /**
     * The URL to the icon to be used for this menu.
     *
     *  - Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme. This should
     *  begin with 'data:image/svg+xml;base64,'.
     *  - Pass the name of a Dashicons helper class to use a font icon, e.g. 'dashicons-chart-pie'.
     *  - Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS.
     *
     * @return string
     */
    public function getIconUrl(): string;

    /**
     * The position in the menu order this one should appear.
     *
     * @return int
     */
    public function getPosition(): int;
}
