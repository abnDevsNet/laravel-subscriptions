<?php

namespace AbnDevs\Subscriptions\Exceptions;

class InvalidPlanSubscription extends LaravelSubscriptionsException
{
    public function __construct($subscriptionTag = "")
    {
        $message = "Subscription '{$subscriptionTag}' not found.";

        parent::__construct($message);
    }
}
