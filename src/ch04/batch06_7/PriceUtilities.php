<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_7;

/* Листинг 04.36 */
trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        // is this good design?
        return (($this->taxrate / 100) * $price);
    }

    // other utilities
}
