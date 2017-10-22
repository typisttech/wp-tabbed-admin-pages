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

use Closure;
use TypistTech\WPAdminTabs\AdminTab;
use TypistTech\WPAdminTabs\AdminTabCollection;
use TypistTech\WPKsesView\Factory;

class Registrar
{
    /**
     * The menu page to be registered.
     *
     * @var MenuPageInterface
     */
    private $menuPage;

    /**
     * The submenu pages to be registered.
     *
     * @var SubmenuPageInterface[]
     */
    private $submenuPages = [];

    /**
     * For rendering tabbed navigation.
     *
     * @var AdminTabCollection
     */
    private $adminTabCollection;

    /**
     * Registrar constructor.
     *
     * @param MenuPageInterface $menuPage The menu page to be registered.
     */
    public function __construct(MenuPageInterface $menuPage)
    {
        $this->menuPage = $menuPage;

        $this->adminTabCollection = new AdminTabCollection();
    }

    /**
     * Add submenu pages.
     *
     * @param SubmenuPageInterface[] ...$submenuPages The submenu pages to be registered.
     */
    public function add(SubmenuPageInterface ...$submenuPages)
    {
        $this->submenuPages = array_merge(
            $this->submenuPages,
            $submenuPages
        );
    }

    /**
     * Register menu page and submenu pages with WordPress.
     * And, prepare the tabbed navigation.
     *
     * @return void
     */
    public function run()
    {
        $this->registerMenuPage();
        $this->registerSubmenuPages();

        $this->prepareAdminTabCollection();
    }

    /**
     * Register menu page with WordPress.
     *
     * @return void
     */
    private function registerMenuPage()
    {
        add_menu_page(
            $this->menuPage->getPageTitle(),
            $this->menuPage->getMenuTitle(),
            $this->menuPage->getCapability(),
            $this->menuPage->getMenuSlug(),
            $this->getRenderClosureFor($this->menuPage),
            $this->menuPage->getIconUrl(),
            $this->menuPage->getPosition()
        );
    }

    /**
     * Returns a closure which render the given page.
     *
     * @param RenderablePageInterface $page Page to be rendered.
     *
     * @return Closure
     */
    private function getRenderClosureFor(RenderablePageInterface $page): Closure
    {
        return function () use ($page) {
            $view = Factory::build(__DIR__ . '/partials/tabbed-admin-page.php');
            $view->render(
                (object) [
                    'adminTabCollection' => $this->adminTabCollection,
                    'page' => $page,
                ]
            );
        };
    }

    /**
     * Register submenu page with WordPress.
     *
     * @return void
     */
    private function registerSubmenuPages()
    {
        array_map(
            function (SubmenuPageInterface $submenuPage) {
                add_submenu_page(
                    $this->menuPage->getMenuSlug(),
                    $submenuPage->getPageTitle(),
                    $submenuPage->getMenuTitle(),
                    $submenuPage->getCapability(),
                    $submenuPage->getMenuSlug(),
                    $this->getRenderClosureFor($submenuPage)
                );
            },
            $this->submenuPages
        );
    }

    /**
     * Prepare admin tab collection, i.e.: the tabbed navigation.
     * This method must be called after `add_menu_page` and `add_submenu_page`.
     *
     * @return void
     */
    private function prepareAdminTabCollection()
    {
        array_map(
            function (TabbablePageInterface $page) {
                $this->adminTabCollection->add(
                    new AdminTab(
                        $page->getMenuTitle(),
                        menu_page_url($page->getMenuSlug(), false)
                    )
                );
            },
            array_merge([$this->menuPage], $this->submenuPages)
        );
    }
}
