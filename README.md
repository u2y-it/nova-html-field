# Laravel nova HTML Field

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

The package was created only to add such a feature to the **Update** and **Create** screen. By default, **Create** screen is disabled.

Example: 
```injectablephp
Html::make('Preview', function () {
    return view('custom-link', [
        'url' => url('/preview'),
        'id' => $this->id,
    ])->render();
});
```

```injectablephp
Html::make('Docs', function () {
    return view('custom-link', [
        'url' => url('/docs'),
    ])->render();
})
    ->showOnCreating()
    ->help('Link to documentation');
```

## Installation

You can install the package via composer:

```bash
composer require yaroslawww/nova-html-field
```

## Credits

- [![Think Studio](https://yaroslawww.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
