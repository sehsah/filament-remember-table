# Filament Remember Table

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sehsah/filament-remember-table.svg?style=flat-square)](https://packagist.org/packages/sehsah/filament-remember-table)
[![License](https://img.shields.io/packagist/l/sehsah/filament-remember-table.svg?style=flat-square)](LICENSE.md)

Let your users save the way they like a Filament table (filters, search, sorting, grouping, visible columns) as named **views**, and switch between them in one click.

- Save the current table as a named view
- Switch views from a dropdown in the page header
- Update, rename, reorder and delete views
- Set a **default view** that opens automatically
- Define **preset views** in code
- **Share** a view with every user of the panel
- Shareable links: the active view lives in the URL (`?view=12`)
- Multi-tenancy aware
- English, Arabic, Azerbaijani, Turkish, Russian, Ukrainian, Uzbek, German, French, Spanish, Portuguese (Brazil), Dutch, Italian, Persian, Hindi, Indonesian, Malay, Polish and Chinese (Simplified) translations, RTL friendly for Arabic, Persian and Azerbaijani contexts where applicable

## Requirements

- PHP 8.2+
- Filament 5.x

## Installation

```bash
composer require sehsah/filament-remember-table
php artisan filament-remember-table:install
```

The install command publishes the config and migration and asks to run the migration. You can also do it by hand:

```bash
php artisan vendor:publish --tag="filament-remember-table-config"
php artisan vendor:publish --tag="filament-remember-table-migrations"
php artisan migrate
```

## Usage

Add the trait to a page that has a table (usually a resource's list page) and put the actions in the header:

```php
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Sehsah\FilamentRememberTable\Concerns\HasRememberTable;

class ListOrders extends ListRecords
{
    use HasRememberTable;

    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ...$this->getTableViewActions(),
            CreateAction::make(),
        ];
    }
}
```

That's it. A **Views** button appears in the page header.

### Preset views

Views defined in code show up for everyone and can't be edited or deleted by users:

```php
use Sehsah\FilamentRememberTable\PresetView;

public function getPresetTableViews(): array
{
    return [
        PresetView::make('Pending orders')
            ->icon('heroicon-o-clock')
            ->filters(['status' => ['value' => 'pending']])
            ->sort('created_at', 'desc')
            ->default(), // used when the user has no default of their own

        PresetView::make('Big spenders')
            ->filters(['total' => ['total_from' => 1000]])
            ->hiddenColumns(['notes'])
            ->visibleColumns(['customer.email'])
            ->grouping('customer.name'),
    ];
}
```

`filters()` takes the raw filter form state, keyed by filter name. For a `SelectFilter` or `TernaryFilter` that is `['value' => ...]`; for a multiple `SelectFilter` it is `['values' => [...]]`; for a custom filter it is whatever its form fields are named.

Other preset options: `search()`, `tab()` (a key from the list page's `getTabs()`), `perPage()` and `key()` (a stable id for the URL).

### Several tables on one page

Views are stored per page class. If you reuse the same page class for different tables, override the key:

```php
public function getTableViewsKey(): string
{
    return static::class . ':' . $this->type;
}
```

## What is saved

| Part | Config key | Default |
|---|---|---|
| Filters | `filters` | on |
| Global search | `search` | on |
| Per-column searches | `column_searches` | on |
| Sort column and direction | `sort` | on |
| Grouping | `grouping` | on |
| Column visibility and order | `columns` | on |
| List page tab | `tab` | on |
| Records per page | `per_page` | off |

Turn parts on or off in `config/remember-table.php` under `remember`.

Saved views are validated when they are applied: filters, columns, groups and tabs that no longer exist on the table are ignored, and columns you added after a view was saved still show up.

## Configuration

```php
return [
    'table_name' => 'remember_table_views',
    'model' => \Sehsah\FilamentRememberTable\Models\TableView::class,

    'remember' => [ /* see table above */ ],

    'allow_public_views' => true,        // "Share with everyone" toggle
    'apply_default_view_on_load' => true,
    'scope_to_tenant' => true,           // separate views per Filament tenant
    'max_views_per_table' => 50,         // per user; null for no limit
];
```

## How it behaves

- **Default view**: applied when a user opens the table, unless the URL already has table state (`?filters=`, `?search=`, `?sort=`, `?tab=`...), so links to a filtered table keep working.
- **Modified indicator**: after applying a view, changing the table shows `View name (modified)` on the button, and **Update current view** appears for views the user owns.
- **Shared views**: other users can apply them, and they are labelled *Shared*. Only the owner can update, rename or delete them.
- **Reset table**: clears the active view and puts the table back to its defaults.

## Customizing the actions

Each action is a normal Filament action. To tweak one, alias the trait method and wrap it:

```php
use HasRememberTable {
    saveTableViewAction as baseSaveTableViewAction;
}

public function saveTableViewAction(): \Filament\Actions\Action
{
    return $this->baseSaveTableViewAction()->modalWidth('lg');
}
```

Available: `saveTableViewAction()`, `updateTableViewAction()`, `manageTableViewsAction()`, `resetTableViewAction()`.

## Testing

```bash
composer test
```

## Roadmap

- Team-level sharing (share with specific roles or users)
- Record count badges on views
- Views as tabs above the table
- A panel page listing all views
- Import / export views as JSON

## Changelog

See [CHANGELOG](CHANGELOG.md).

## License

The MIT License (MIT). See [License File](LICENSE.md).
