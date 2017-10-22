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

interface SubmenuPageInterface extends RenderablePageInterface, TabbablePageInterface
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
}
