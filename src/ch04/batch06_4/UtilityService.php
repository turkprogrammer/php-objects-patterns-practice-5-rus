<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_4;

/* Листинг 04.29 */
class UtilityService extends Service
{
    use PriceUtilities, TaxTools {
        TaxTools::calculateTax insteadof PriceUtilities;
    }
}
/* /Листинг 04.29 */
