<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class MenuPageCest
{
    /** @tests */
    public function it_shows_title(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-demo-main');

        $I->assertSame(
            'WP Tabbed AdminPages Demo - Main',
            $I->grabTextFrom('h1')
        );
    }

    /** @test */
    public function it_renders_its_view(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-demo-main');

        $I->see('This is a useless demo menu page');
    }
}
