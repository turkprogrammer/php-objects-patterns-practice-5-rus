<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_9;

trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        return (($this->getTaxRate() / 100) * $price);
    }

    abstract public function getTaxRate(): float;

    // Другие служебные методы
}
