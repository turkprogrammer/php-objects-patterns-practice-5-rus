<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch06;

/* Листинг 10.18 */

class Plains extends Tile
{
    private $wealthfactor = 2;

    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }
}
/* /Листинг 10.18 */
