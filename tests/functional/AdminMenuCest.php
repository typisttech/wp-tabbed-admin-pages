<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class AdminMenuCest
{
    /** @test */
    public function it_shows_menu_page(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('/');
        $I->seeElement('li#toplevel_page_my-demo-main .toplevel_page_my-demo-main');
    }

    /** @test */
    public function it_shows_menu_page_link(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('/');
        $I->click('Demo Main');
        $I->seeInCurrentUrl('admin.php?page=my-demo-main');
    }

    /** @test */
    public function it_shows_menu_page_icon(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('/');
        $I->seeElement('#toplevel_page_my-demo-main .dashicons-admin-generic');
    }

    /** @test */
    public function it_shows_submenu_page_links(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('/');
        $I->seeLink('Sub A', 'admin.php?page=my-sub-a');
        $I->seeLink('Sub B', 'admin.php?page=my-sub-b');
        $I->seeLink('Sub C', 'admin.php?page=my-sub-c');
    }
}
