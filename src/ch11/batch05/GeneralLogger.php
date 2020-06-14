<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.31 */
class GeneralLogger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // add login data to log
        print __CLASS__ . ":    add login data to log\n";
    }
}
