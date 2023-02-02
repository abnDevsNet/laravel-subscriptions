<?php

namespace AbnDevs\Subscriptions\Exceptions;

class UsageDenied extends LaravelSubscriptionsException
{
    public function __construct($featureTag = '')
    {
        $message = "Usage of '{$featureTag}' has been denied.";

        parent::__construct($message);
    }
}
