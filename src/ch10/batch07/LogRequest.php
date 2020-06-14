<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

/* Листинг 10.32 */
class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": logging request\n";
        $this->processrequest->process($req);
    }
}
