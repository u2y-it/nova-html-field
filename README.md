# Laravel nova HTML Field

![Packagist License](https://img.shields.io/packagist/l/think.studio/nova-html-field?color=%234dc71f)
[![Packagist Version](https://img.shields.io/packagist/v/think.studio/nova-html-field)](https://packagist.org/packages/think.studio/nova-html-field)
[![Total Downloads](https://img.shields.io/packagist/dt/think.studio/nova-html-field)](https://packagist.org/packages/think.studio/nova-html-field)
[![Build Status](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/badges/build.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/build-status/main)
[![Code Coverage](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-html-field/?branch=main)


| Nova | Package |
|------|------|
| V1   | V1   |
| V4   | V2   |

## Usage Warning!

If you want use html only on **Index (Preview)** or **Details** screen, then please use default laravel nova functionality:

```injectablephp
\Laravel\Nova\Fields\Text::make('Preview', function () {
    return view('custom-link', [
        'url' => url('/preview'),
        'id' => $this->id,
    ])->render();
})->asHtml();
```

The package was created to add such a feature also to the **Update** and **Create** screens.
(By default, **Create** screen is disabled.)

## Installation

You can install the package via composer:

```bash
composer require think.studio/nova-html-field
```

## Usage
 
```php
Html::make('Preview', function () {
    return view('nova-html-field::blocks.link', [
        'href' => url('/preview'),
        'linkText' => 'Preview',
        'target' => '_blank',
    ])->render();
})->clickable();

Html::make('Preview', function () {
    return view('nova-html-field::blocks.links', [
        'links' => [
            [
                'href' => url('/preview'),
                'title' => 'title',
                'target' => '_blank',
            ],
            [
                'href' => url('/preview'),
                'title' => 'title',
                'target' => '_blank',
            ],
        ]
    ])->render();
})
    ->clickable()
    ->showOnIndex()
    ->showOnPreview(),
```

```php
Html::make('Docs', fn() => view('nova-html-field::blocks.link', [ 'href' => $this->resource->pdfUrl(), ])->render() )
    ->showOnCreating()
     ->clickable()
    ->help('Link to documentation');
```

## Credits

- [![Think Studio](https://yaroslawww.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
