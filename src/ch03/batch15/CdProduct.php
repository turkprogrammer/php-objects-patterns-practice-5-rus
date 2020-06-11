<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch15;

/* Листинг 03.49 */

class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);

        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();

        $base .= ": Время звучания - {$this->playLength}";

        return $base;
    }
}

/* /Листинг 03.49 */
