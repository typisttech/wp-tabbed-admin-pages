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

/**
 * Template for `Registrar`.
 * Delegates inner content rendering to `RenderablePageInterface::render`.
 *
 * @var \stdClass                                  $context
 * @var RenderablePageInterface                    $page
 * @var \TypistTech\WPAdminTabs\AdminTabCollection $adminTabCollection
 */
$page = $context->page;
$adminTabCollection = $context->adminTabCollection;

echo '<div class="wrap">';

echo '<h1>' . esc_html($page->getPageTitle()) . '</h1>';
$adminTabCollection->render();

echo '<div id="poststuff">';
echo '<div id="post-body" class="metabox-holder columns-2">';

echo '<div id="post-body-content">';
$page->render();
echo '</div><!-- #post-body-content -->';

echo '<div id="postbox-container-1" class="postbox-container">';
do_meta_boxes($page->getSnakeCaseMenuSlug(), 'side', null);
echo '</div><!-- #postbox-container-1 -->';

echo '<div id="postbox-container-2" class="postbox-container">';
do_meta_boxes($page->getSnakeCaseMenuSlug(), 'normal', null);
do_meta_boxes($page->getSnakeCaseMenuSlug(), 'advanced', null);
echo '</div><!-- #postbox-container-2 -->';

echo '</div><!-- #post-body -->';
echo '</div><!-- #poststuff -->';

echo '</div><!-- .warp -->';
