<?php

namespace ThinkStudio\HtmlField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Html extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'html-field';

    public $showOnCreation = false;

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->attribute = 'TemporaryNotComputedField';
    }


    /**
     * Resolve the field's value for display.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     * @return void
     */
    public function resolveForDisplay($resource, $attribute = null)
    {
        $this->attribute = 'ComputedField';
        parent::resolveForDisplay($resource, $attribute);
        $this->attribute = 'ComputedField';
    }

    /**
     * Override attribute name
     * @see ResolvesFields::removeNonUpdateFields
     * @inheritDoc
     */
    public function resolve($resource, $attribute = null)
    {
        $this->attribute = 'ComputedField';
        parent::resolve($resource, $attribute);
        $this->attribute = 'TemporaryNotComputedField';
    }

    /**
     * @param NovaRequest $request
     * @param object $model
     *
     * @return mixed|void
     */
    public function fill(NovaRequest $request, $model)
    {
        // nothing
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'asHtml' => true,
            'value'  => $this->value,
        ]);
    }
}
