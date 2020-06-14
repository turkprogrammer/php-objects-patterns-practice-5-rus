<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.27 */
interface Observer
{
    public function update(Observable $observable);
}
