<?php
/**
 * WP Tabbed Admin Pages
 *
 * Create WordPress admin pages with tabbed navigations, the OOP way.
 *
 * @package TypistTech\WPTabbedAdminPages
 *
 * @author Typist Tech <wp-tabbed-admin-pages@typist.tech>
 * @copyright 2017 Typist Tech
 * @license GPL-2.0+
 *
 * @see https://www.typist.tech/projects/wp-tabbed-admin-pages
 * @see https://github.com/TypistTech/wp-tabbed-admin-pages
 */

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class SubmenuPage extends AbstractPage implements SubmenuPageInterface
{
    /**
     * SubmenuPage constructor.
     *
     * @param string $pageTitle  The text to be displayed in the title tags of the page when the menu is selected.
     * @param string $menuTitle  The text to be used for the menu.
     * @param string $pageSlug   The slug name to refer to this menu by (should be unique for this menu).
     * @param string $capability Optional. The capability required for this menu to be displayed to the user.
     */
    public function __construct(
        string $pageTitle,
        string $menuTitle,
        string $pageSlug,
        string $capability = null
    ) {
        $this->pageTitle = $pageTitle;
        $this->menuTitle = $menuTitle;
        $this->pageSlug = $pageSlug;

        $this->capability = $capability ?? static::DEFAULT_CAPABILITY;
    }
}
