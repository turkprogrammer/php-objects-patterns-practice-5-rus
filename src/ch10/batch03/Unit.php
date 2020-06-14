<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch03;

/* Листинг 10.06 */
abstract class Unit
{
    abstract public function addUnit(Unit $unit);
    abstract public function removeUnit(Unit $unit);
    abstract public function bombardStrength(): int;
}
/* /Листинг 10.06 */
