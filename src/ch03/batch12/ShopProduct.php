<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch12;

/* Листинг 03.35 */

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages = 0,
        int $playLength = 0
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . ' ' . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";

        return $base;
    }
}

/* /Листинг 03.35 */
