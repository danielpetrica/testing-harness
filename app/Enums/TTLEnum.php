<?php

namespace App\Enums;

/**
 * Backed Enum representing common Time-To-Live (TTL) values in seconds.
 * * To get the seconds for a case: TtlSeconds::OneHour->value
 * To list all cases: TtlSeconds::cases()
 */
enum TTLEnum: int
{
    // --- Second / Minute based TTLs ---
    case TenSeconds = 10;
    case ThirtySeconds = 30;
    case OneMinute = 60;
    case TwoMinutes = 120;
    case FiveMinutes = 300;
    case TenMinutes = 600;
    case FifteenMinutes = 900;
    case TwentyMinutes = 1200;
    case ThirtyMinutes = 1800;
    case FortyFiveMinutes = 2700;

    // --- Hour based TTLs ---
    case OneHour = 3600;
    case TwoHours = 7200;
    case ThreeHours = 10800;
    case FourHours = 14400;
    case FiveHours = 18000;
    case SixHours = 21600;
    case EightHours = 28800;
    case TenHours = 36000;
    case TwelveHours = 43200;
    case EighteenHours = 64800;

    // --- Day based TTLs ---
    case OneDay = 86400;
    case TwoDays = 172800;
    case ThreeDays = 259200;
    case FourDays = 345600;
    case FiveDays = 432000;
    case SixDays = 518400;
    case SevenDays = 604800;       // One Week

    // --- Week based TTLs ---
    case TwoWeeks = 1209600;
    case ThreeWeeks = 1814400;
    case FourWeeks = 2419200;

    // --- Month / Longer based TTLs ---
    case OneMonth30Days = 2592000; // Approximation (30 days)
    case NinetyDays = 7776000;     // 3 months
    case SixMonths = 15552000;     // Approximation (6 * 30 days)
    case OneYear = 31536000;       // Approximation (365 days)

    // An optional method to make the use more explicit
    public function getSeconds(): int
    {
        return $this->value;
    }
}
