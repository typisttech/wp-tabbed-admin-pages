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

class MenuPage extends AbstractPage implements MenuPageInterface
{
    const DEFAULT_ICON_URL = 'dashicons-admin-generic';
    const DEFAULT_POSITION = 100;

    /**
     * The position in the menu order this one should appear.
     *
     * @var int
     */
    private $position;

    /**
     * The URL to the icon to be used for this menu.
     *
     *  - Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme. This should
     *  begin with 'data:image/svg+xml;base64,'.
     *  - Pass the name of a Dashicons helper class to use a font icon, e.g. 'dashicons-chart-pie'.
     *  - Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS.
     *
     * @var string
     */
    private $iconUrl;

    /**
     * MenuPage constructor.
     *
     * @param string $pageTitle  The text to be displayed in the title tags of the page when the menu is selected.
     * @param string $menuTitle  The text to be used for the menu.
     * @param string $pageSlug   The slug name to refer to this menu by (should be unique for this menu).
     * @param string $capability Optional. The capability required for this menu to be displayed to the user.
     * @param string $iconUrl    Optional. The URL to the icon to be used for this menu.
     * @param int    $position   Optional. The position in the menu order this one should appear.
     */
    public function __construct(
        string $pageTitle,
        string $menuTitle,
        string $pageSlug,
        string $capability = null,
        string $iconUrl = null,
        int $position = null
    ) {
        $this->pageTitle = $pageTitle;
        $this->menuTitle = $menuTitle;
        $this->pageSlug = $pageSlug;

        $this->capability = $capability ?? static::DEFAULT_CAPABILITY;
        $this->iconUrl = $iconUrl ?? static::DEFAULT_ICON_URL;
        $this->position = $position ?? static::DEFAULT_POSITION;
    }

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
    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    /**
     * The position in the menu order this one should appear.
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
}
