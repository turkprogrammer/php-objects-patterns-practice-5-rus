<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.32 */
class PartnershipTool extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // check $ip address
        // set cookie if it matches a list
        print __CLASS__ . ":    set cookie if it matches a list\n";
    }
}
