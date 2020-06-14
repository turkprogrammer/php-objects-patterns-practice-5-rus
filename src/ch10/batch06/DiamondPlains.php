<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch06;

/* Листинг 10.19 */

class DiamondPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() + 2;
    }
}
/* /Листинг 10.19 */
