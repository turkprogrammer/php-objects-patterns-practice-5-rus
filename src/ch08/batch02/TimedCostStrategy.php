<?php declare(strict_types=1);
namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.09 */
class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return ($lesson->getDuration() * 5);
    }

    public function chargeType(): string
    {
        return "hourly rate";
    }
}
/* /Листинг 08.09 */
