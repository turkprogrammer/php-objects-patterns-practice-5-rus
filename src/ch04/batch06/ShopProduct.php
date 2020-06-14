<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06;

/* Листинг 04.10 */

class ShopProduct
{
    private $taxrate = 17;

/* /Листинг 04.10 */

    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    ) {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName  = $mainName;
        $this->price             = $price;
    }

/* Листинг 04.10 */

// ...

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }
}
/* /Листинг 04.10 */
