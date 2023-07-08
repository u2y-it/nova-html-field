<?php

namespace ThinkStudio\HtmlField\Tests;

use Laravel\Nova\Http\Requests\NovaRequest;
use ThinkStudio\HtmlField\Html;
use ThinkStudio\HtmlField\Tests\Fixture\Model\Article;

class HtmlFieldTest extends TestCase
{
    /** @test */
    public function returns_correct_component_name()
    {
        $htmlField = Html::make('Foo');

        $this->assertEquals('html-field', $htmlField->component());
    }

    /** @test */
    public function change_clickable()
    {
        $htmlField = Html::make('Foo', fn() => 'bar');
        $htmlField->resource = new Article();

        $this->assertFalse($htmlField->clickable);
        $htmlField->clickable();
        $this->assertTrue($htmlField->clickable);
        $this->assertTrue($htmlField->jsonSerialize()['clickable']);
    }

    /** @test */
    public function callback_on_display()
    {
        $htmlField = Html::make('Foo', fn() => 'bar');

        $htmlField->resolveForDisplay(null);

        $this->assertEquals('bar', $htmlField->value);
    }

    /** @test */
    public function fill_do_nothing()
    {
        $htmlField = Html::make('Foo', fn() => 'bar');

        $this->assertNull($htmlField->value);
        $htmlField->fill(new NovaRequest(), new Article());
        $this->assertNull($htmlField->value);
    }

}
