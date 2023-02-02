<?php


namespace AbnDevs\Subscriptions\Tests\Unit;


use AbnDevs\Subscriptions\Models\Plan;
use AbnDevs\Subscriptions\Tests\TestCase;

class PlanTest extends TestCase
{
    /**
     * Test Plan creation with already existing tag in database
     */
    public function testUnableToCreatePlanWithExistingTag()
    {
        $this->expectException('AbnDevs\Subscriptions\Exceptions\DuplicateException');
        Plan::create([
            'tag' => 'basic',
            'name' => 'New Basic Plan',
            'description' => 'This plan cannot exist.',
            'currency' => 'EUR'
        ]);
    }
}
