<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.28 */

class LoginAnalytics implements Observer
{
    public function update(Observable $observable)
    {
        // not type safe!
        $status = $observable->getStatus();
        print __CLASS__ . ":    doing something with status info\n";
    }
}
