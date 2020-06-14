<?php declare(strict_types=1);
namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.10 */
class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    public function chargeType(): string
    {
        return "fixed rate";
    }
}
/* /Листинг 08.10 */
