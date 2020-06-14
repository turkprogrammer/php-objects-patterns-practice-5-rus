<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

/* Листинг 10.30 */

class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": doing something useful with request\n";
    }
}
