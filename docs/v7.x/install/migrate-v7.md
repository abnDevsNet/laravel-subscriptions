# Upgrade v6.x to v7.x

## Composer

In your composer version, require `v1.0` version.

```json
"abndevs/laravel-subscriptions": "^v1.0",
```

## Config

### Changed lines

Changed `plan_combinations` to `plan_combination` in models:

```php
    // Models
    'models' => [
        ...
        'plan_combination' => \AbnDevs\Subscriptions\Models\PlanCombination::class,
    ...
    ]
```

## Migrations

Publish v1 migrations

```shell
php artisan vendor:publish --tag=laravel-subscriptions.migrations.v7
php artisan migrate
```
