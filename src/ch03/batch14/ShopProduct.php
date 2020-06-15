<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch14;

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    /* Листинг 03.44 */

    // Класс ShopProduct...

    public $discount = 0;

    /* /Листинг 03.44 */

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /* Листинг 03.44 */

    //...

    public function setDiscount(int $num)
    {
        $this->discount = $num;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    /* /Листинг 03.44 */

    public function getProducer()
    {
        return "{$this->producerFirstName}" .
            " {$this->producerMainName}";
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}
