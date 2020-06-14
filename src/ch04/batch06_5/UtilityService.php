<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_5;

/* Листинг 04.31 */

class UtilityService extends Service
{

    use PriceUtilities, TaxTools {
        TaxTools::calculateTax insteadof PriceUtilities;
        PriceUtilities::calculateTax as basicTax;
    }
}
