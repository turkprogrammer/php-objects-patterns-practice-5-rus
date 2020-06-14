<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

/* Листинг 10.33 */

class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": authenticating request\n";
        $this->processrequest->process($req);
    }
}
