<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch13;

/* Листинг 03.40 */

class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages
    )
    {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( $this->producerMainName, ";
        $base .= "$this->producerFirstName )";
        $base .= ":  {$this->numPages}  стр.";
        return $base;
    }
}

/* /Листинг 03.40 */
