<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch06;

/* Листинг 10.24 */

class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}
