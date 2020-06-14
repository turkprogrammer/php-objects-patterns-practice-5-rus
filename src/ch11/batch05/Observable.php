<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.24 */

interface Observable
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
}
