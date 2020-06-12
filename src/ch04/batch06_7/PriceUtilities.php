<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_7;

trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        // Удачно ли такое проектное решение?
        return (($this->taxrate / 100) * $price);
    }

    // Другие служебные методы
}
