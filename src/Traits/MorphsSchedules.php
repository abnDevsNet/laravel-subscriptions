<?php

namespace AbnDevs\Subscriptions\Traits;

trait MorphsSchedules
{
    /**
     * Get all schedules.
     */
    public function schedules()
    {
        return $this->morphMany(config('laravel-subscriptions.models.plan_subscription_schedule'), 'scheduleable');
    }
}
