<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

use Codeception\TestCase\WPTestCase;

/**
 * @covers \TypistTech\WPTabbedAdminPages\SubmenuPage
 */
class SubmenuPageTest extends WPTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->minimalSubject = new SubmenuPage('My Page Title', 'My Menu Title', 'my-slug');
        $this->customSubject = new SubmenuPage(
            'My Custom Page Title',
            'My Custom Menu Title',
            'my-custom-slug',
            'my_custom_capability'
        );
    }

    /** @test */
    public function it_is_an_instance_of_submenu_page_interface()
    {
        $this->assertInstanceOf(SubmenuPageInterface::class, $this->minimalSubject);
    }

    /** @test */
    public function it_is_an_instance_of_abstract_page()
    {
        $this->assertInstanceOf(AbstractPage::class, $this->minimalSubject);
    }

    /** @test */
    public function it_has_page_title_getter()
    {
        $this->assertSame(
            'My Page Title',
            $this->minimalSubject->getPageTitle()
        );
    }

    /** @test */
    public function it_has_menu_title_getter()
    {
        $this->assertSame(
            'My Menu Title',
            $this->minimalSubject->getMenuTitle()
        );
    }

    /** @test */
    public function it_has_menu_slug_getter()
    {
        $this->assertSame(
            'my-slug',
            $this->minimalSubject->getMenuSlug()
        );
    }

    /** @test */
    public function it_has_capability_getter()
    {
        $this->assertSame(
            'my_custom_capability',
            $this->customSubject->getCapability()
        );
    }

    /** @test */
    public function it_has_default_capability()
    {
        $this->assertSame(
            'manage_options',
            $this->minimalSubject->getCapability()
        );
    }
}
