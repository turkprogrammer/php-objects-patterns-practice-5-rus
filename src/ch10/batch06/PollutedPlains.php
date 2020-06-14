<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch06;

/* Листинг 10.20 */

class PollutedPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() - 4;
    }
}
/* /Листинг 10.20 */
