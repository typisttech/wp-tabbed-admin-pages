<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class TabbedNavigationCest
{
    /** @test */
    public function it_shows_active_menu_page_link_on_menu_page(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-demo-main');

        $I->assertSame(
            'Demo Main',
            $I->grabTextFrom('a.nav-tab.nav-tab-active')
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-demo-main',
            $I->grabAttributeFrom('a.nav-tab.nav-tab-active', 'href')
        );
    }

    /** @test */
    public function it_shows_non_active_submenu_page_links_on_menu_page(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-demo-main');

        $I->assertSame(
            ['Sub A', 'Sub B', 'Sub C'],
            $I->grabMultiple('.nav-tab:not(.nav-tab-active)')
        );

        $nonActivePageLinks = $I->grabMultiple('.nav-tab:not(.nav-tab-active)', 'href');

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-a',
            $nonActivePageLinks[0]
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-b',
            $nonActivePageLinks[1]
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-c',
            $nonActivePageLinks[2]
        );
    }

    /** @test */
    public function it_shows_active_submenu_page_link_on_submenu_page(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-sub-a');

        $I->assertSame(
            'Sub A',
            $I->grabTextFrom('a.nav-tab.nav-tab-active')
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-a',
            $I->grabAttributeFrom('a.nav-tab.nav-tab-active', 'href')
        );
    }

    /** @test */
    public function it_shows_non_active_page_links_on_submenu_page(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-sub-a');

        $I->assertSame(
            ['Demo Main', 'Sub B', 'Sub C'],
            $I->grabMultiple('.nav-tab:not(.nav-tab-active)')
        );

        $nonActivePageLinks = $I->grabMultiple('.nav-tab:not(.nav-tab-active)', 'href');

        $I->assertContains(
            '/wp-admin/admin.php?page=my-demo-main',
            $nonActivePageLinks[0]
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-b',
            $nonActivePageLinks[1]
        );

        $I->assertContains(
            '/wp-admin/admin.php?page=my-sub-c',
            $nonActivePageLinks[2]
        );
    }
}
