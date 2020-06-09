<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch09;

/* Листинг 03.22 */

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    // ...
    /* /Листинг 03.22 */

    public function getProducer()
    {
        return "{$this->producerFirstName}" . " {$this->producerMainName}";
    }
    /* Листинг 03.22 */
}
/* /Листинг 03.22 */
