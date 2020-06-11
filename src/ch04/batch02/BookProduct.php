<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch02;

class BookProduct extends ShopProduct
{
    private $numPages = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);

        $this->numPages = $numPages;
    }

    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": $this->numPages стр.";

        return $base;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
