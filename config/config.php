<?php

declare(strict_types=1);

return [
    'main_subscription_tag' => 'main',
    'fallback_plan_tag' => null,
    // Database Tables
    'tables' => [
        'plans' => 'plans',
        'plan_combinations' => 'plan_combinations',
        'plan_features' => 'plan_features',
        'plan_subscriptions' => 'plan_subscriptions',
        'plan_subscription_features' => 'plan_subscription_features',
        'plan_subscription_schedules' => 'plan_subscription_schedules',
        'plan_subscription_usage' => 'plan_subscription_usage',
    ],

    // Models
    'models' => [
        'plan' => \AbnDevs\Subscriptions\Models\Plan::class,
        'plan_combination' => \AbnDevs\Subscriptions\Models\PlanCombination::class,
        'plan_feature' => \AbnDevs\Subscriptions\Models\PlanFeature::class,
        'plan_subscription' => \AbnDevs\Subscriptions\Models\PlanSubscription::class,
        'plan_subscription_feature' => \AbnDevs\Subscriptions\Models\PlanSubscriptionFeature::class,
        'plan_subscription_schedule' => \AbnDevs\Subscriptions\Models\PlanSubscriptionSchedule::class,
        'plan_subscription_usage' => \AbnDevs\Subscriptions\Models\PlanSubscriptionUsage::class,
    ],

    'services' => [
        'payment_methods' => [
            'free' => \AbnDevs\Subscriptions\Services\PaymentMethods\Free::class
        ]
    ]
];
