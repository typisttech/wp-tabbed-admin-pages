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

abstract class AbstractPage
{
    const DEFAULT_CAPABILITY = 'manage_options';

    /**
     * The text to be displayed in the title tags of the page when the menu is selected.
     *
     * @var string
     */
    protected $pageTitle;
    /**
     * The text to be used for the menu.
     *
     * @var string
     */
    protected $menuTitle;
    /**
     * The slug name to refer to this menu by (should be unique for this menu).
     *
     * @var string
     */
    protected $pageSlug;
    /**
     * The capability required for this menu to be displayed to the user.
     *
     * @var string
     */
    protected $capability;

    /**
     * The text to be displayed in the title tags of the page when the menu is selected.
     *
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * The text to be used for the menu.
     *
     * @return string
     */
    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }

    /**
     * The slug name to refer to this menu by (should be unique for this menu).
     *
     * @return string
     */
    public function getMenuSlug(): string
    {
        return $this->pageSlug;
    }

    /**
     * The capability required for this menu to be displayed to the user.
     *
     * @return string
     */
    public function getCapability(): string
    {
        return $this->capability;
    }
}
