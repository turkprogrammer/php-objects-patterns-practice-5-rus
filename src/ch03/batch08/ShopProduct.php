<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch08;

/* Листинг 03.12 */

class ShopProduct
{
    public string $title;
    public string $producerMainName;
    public string $producerFirstName;
    public float $price = 0;

    /**
     * ShopProduct constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float $price
     */
    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerFirstName . ' ' . $this->producerMainName;
    }
}

/* /Листинг 03.12 */
