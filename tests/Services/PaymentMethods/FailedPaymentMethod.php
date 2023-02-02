<?php

declare(strict_types=1);

namespace AbnDevs\Subscriptions\Tests\Services\PaymentMethods;

use AbnDevs\Subscriptions\Contracts\PaymentMethodService;
use AbnDevs\Subscriptions\Traits\IsPaymentMethod;

class FailedPaymentMethod implements PaymentMethodService
{
    use IsPaymentMethod;

    /**
     * Charge desired amount
     * @return void
     */
    public function charge()
    {
        throw new \Exception('Payment failed');
    }
}
