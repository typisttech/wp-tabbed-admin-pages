<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

class DemoPluginCest
{
    /** @test */
    public function it_is_activated(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('plugins.php');
        $I->seePluginActivated('wp-tabbed-admin-pages');
    }

    /** @test */
    public function it_is_installed(FunctionalTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnAdminPage('plugins.php');
        $I->seePluginInstalled('wp-tabbed-admin-pages');
    }
}
