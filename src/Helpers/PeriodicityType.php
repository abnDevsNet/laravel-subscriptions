<?php

namespace AbnDevs\Subscriptions\Helpers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use function Symfony\Component\String\s;

class PeriodicityType
{


    public const Day = 'Day';
    public const Week = 'Week';
    public const Month = 'Month';
    public const Year = 'Year';
    public const Quarter = 'Quarter';


    /**
     * Get the date difference between two dates
     * @param Carbon $from
     * @param Carbon $to
     * @param string $unit
     * @return int
     */
    public static function getDateDifference(Carbon $from, Carbon $to, string $unit): int
    {
        $unitInPlural = Str::plural($unit);

        $differenceMethodName = 'diffIn' . $unitInPlural;

        return $from->{$differenceMethodName}($to);
    }

    public static function types()
    {
        return [
            self::Day,
            self::Week,
            self::Month,
            self::Year,
            self::Quarter,
        ];
    }
}
