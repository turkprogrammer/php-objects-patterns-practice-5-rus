<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch15;

/* Листинг 03.50 */

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);

        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": $this->numPages стр.";

        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

/* /Листинг 03.50 */
