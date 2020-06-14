<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch23;

/* Листинг 04.89 */
class Product
{
    public $name;
    public $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
// done
