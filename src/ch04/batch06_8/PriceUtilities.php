<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_8;

/* Листинг 04.39 */

trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        // better design.. we know getTaxRate() is implemented
        return (($this->getTaxRate() / 100) * $price);
    }

    abstract public function getTaxRate(): float;
    // other utilities
}
