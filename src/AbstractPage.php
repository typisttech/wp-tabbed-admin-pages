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

abstract class AbstractPage implements RenderablePageInterface, TabbablePageInterface
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
     * {@inheritdoc}
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * {@inheritdoc}
     */
    public function getSnakeCaseMenuSlug(): string
    {
        return str_replace(
            '-',
            '_',
            strtolower($this->getMenuSlug())
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMenuSlug(): string
    {
        return $this->pageSlug;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        echo 'TODO: Actually implements this render method!!!!';
    }

    /**
     * {@inheritdoc}
     */
    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }

    /**
     * {@inheritdoc}
     */
    public function getCapability(): string
    {
        return $this->capability;
    }
}
