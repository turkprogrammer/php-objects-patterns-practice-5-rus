<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

/* Листинг 10.34 */

class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": structuring request data\n";
        $this->processrequest->process($req);
    }
}
