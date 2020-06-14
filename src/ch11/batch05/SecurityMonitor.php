<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.30 */
class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            // send mail to sysadmin
            print __CLASS__ . ":    sending mail to sysadmin\n";
        }
    }
}
