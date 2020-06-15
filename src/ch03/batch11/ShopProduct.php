<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch11;

/* Листинг 03.30 */

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    /* /Листинг 03.30 */

    public $type = "book";

    /* Листинг 03.30 */

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

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    /* /Листинг 03.30 */

    public function setType(string $type)
    {
        $this->type = $type;
    }

    /* Листинг 03.31 */

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        if ($this->type == 'book') {
            $base .= ":  {$this->numPages}  стр.";
        } elseif ($this->type == 'cd') {
            $base .= ": Время звучания - {$this->playLength}";
        }
        return $base;
    }

    /* /Листинг 03.31 */

    /* Листинг 03.30 */

}

/* /Листинг 03.30 */
