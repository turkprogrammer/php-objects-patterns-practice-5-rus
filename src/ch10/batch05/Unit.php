<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch05;

/* Листинг 10.13 */
abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}
/* /Листинг 10.13 */
