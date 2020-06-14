<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch08;

class Army extends CompositeUnit
{

    public function bombardStrength(): int
    {
        $strength = 0;
        foreach ($this->units() as $unit) {
            $strength += $unit->bombardStrength();
        }
        return $strength;
    }
}
