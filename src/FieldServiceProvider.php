<?php

namespace ThinkStudio\HtmlField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('html-field', __DIR__ . '/../dist/js/field.js');
            Nova::style('html-field', __DIR__ . '/../dist/css/field.css');
        });

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nova-html-field');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/nova-html-field'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
