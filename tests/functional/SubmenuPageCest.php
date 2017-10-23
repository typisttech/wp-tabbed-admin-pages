<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class SubmenuPageCest
{
    /** @tests */
    public function it_shows_title(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-sub-a');

        $I->assertSame(
            'WP Tabbed AdminPages Demo - Sub A',
            $I->grabTextFrom('h1')
        );
    }

    /** @test */
    public function it_renders_its_view(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('admin.php?page=my-sub-a');

        $I->see('You are now on: Sub A');
        $I->see('All work and no play makes Jack a dull boy.');
    }
}
