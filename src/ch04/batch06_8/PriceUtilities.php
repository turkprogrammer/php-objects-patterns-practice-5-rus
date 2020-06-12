<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_8;

trait PriceUtilities
{
    public function calculateTax(float $price): float
    {
        // Более удачное проектное решение, поскольку
        // известно, что метод getTaxRate() должен быть реализован
        return (($this->getTaxRate() / 100) * $price);
    }

    abstract public function getTaxRate(): float;

    // Другие служебные методы
}
