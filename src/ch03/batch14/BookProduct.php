<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch14;

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

    /* Листинг 03.43 */

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
    }

    /* /Листинг 03.43 */

    /* Листинг 03.45 */

    // Класс BookProduct...

    public function getPrice()
    {
        return $this->price;
    }

    /* /Листинг 03.45 */
}
