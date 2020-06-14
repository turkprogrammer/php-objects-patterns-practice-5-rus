<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.08 */

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;

    abstract public function chargeType(): string;
}
/* /Листинг 08.08 */
