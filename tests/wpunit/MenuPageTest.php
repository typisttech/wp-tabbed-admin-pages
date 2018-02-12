<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages;

use AspectMock\Test;
use Codeception\TestCase\WPTestCase;
use TypistTech\WPKsesView\View;
use TypistTech\WPKsesView\ViewAwareTraitInterface;

/**
 * @covers \TypistTech\WPTabbedAdminPages\MenuPage
 */
class MenuPageTest extends WPTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->minimalSubject = new MenuPage('My Page Title', 'My Menu Title', 'my-slug');
        $this->customSubject = new MenuPage(
            'My Custom Page Title',
            'My Custom Menu Title',
            'my-custom-slug',
            'my_custom_capability',
            'My Custom  Icon Url',
            999
        );
    }

    /** @test */
    public function it_is_an_instance_of_renderable_page_interface()
    {
        $this->assertInstanceOf(RenderablePageInterface::class, $this->minimalSubject);
    }

    /** @test */
    public function it_is_an_instance_of_tabbable_page_interface()
    {
        $this->assertInstanceOf(TabbablePageInterface::class, $this->minimalSubject);
    }

    /** @test */
    public function it_is_an_instance_of_menu_page_interface()
    {
        $this->assertInstanceOf(MenuPageInterface::class, $this->minimalSubject);
    }

    /** @test */
    public function it_is_an_instance_of_view_aware_trait_interface()
    {
        $this->assertInstanceOf(ViewAwareTraitInterface::class, $this->minimalSubject);
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

    /** @test */
    public function it_has_icon_url_getter()
    {
        $this->assertSame(
            'My Custom  Icon Url',
            $this->customSubject->getIconUrl()
        );
    }

    /** @test */
    public function it_has_default_icon_url()
    {
        $this->assertSame(
            'dashicons-admin-generic',
            $this->minimalSubject->getIconUrl()
        );
    }

    /** @test */
    public function it_has_position_getter()
    {
        $this->assertSame(
            999,
            $this->customSubject->getPosition()
        );
    }

    /** @test */
    public function it_has_default_position()
    {
        $this->assertSame(
            100,
            $this->minimalSubject->getPosition()
        );
    }

    /** @test */
    public function it_has_snake_case_menu_slug_getter()
    {
        $subject = new MenuPage('My Page Title', 'My Menu Title', 'My-Custom-SLUG');

        $this->assertSame(
            'my_custom_slug',
            $subject->getSnakeCaseMenuSlug()
        );
    }

    /** @test */
    public function it_echos_its_view_with_itself_as_the_context()
    {
        $view = Test::double(View::class);
        $this->minimalSubject->setView(
            $view->construct(
                codecept_data_dir('dummy-template.php'),
                wp_kses_allowed_html('post')
            )
        );

        $this->minimalSubject->render();

        $view->verifyInvokedOnce('render', [$this->minimalSubject]);
    }
}
