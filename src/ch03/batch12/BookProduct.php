<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch12;

/* Листинг 03.37 */

class BookProduct extends ShopProduct
{
    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": {$this->numPages} стр.";

        return $base;
    }
}

/* /Листинг 03.37 */
