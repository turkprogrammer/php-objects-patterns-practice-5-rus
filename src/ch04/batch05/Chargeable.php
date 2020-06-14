<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

/* Листинг 04.08 */

interface Chargeable
{
    public function getPrice(): float;
}
