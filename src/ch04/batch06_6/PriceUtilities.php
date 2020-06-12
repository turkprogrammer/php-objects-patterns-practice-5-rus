<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_6;

trait PriceUtilities
{
    private static $taxrate = 17;

    public static function calculateTax(float $price): float
    {
        return ((self::$taxrate / 100) * $price);
    }

    // Другие служебные методы
}
