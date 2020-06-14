<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_7;

/* Листинг 04.37 */
class UtilityService extends Service
{
    public $taxrate = 17;
    use PriceUtilities;
}
