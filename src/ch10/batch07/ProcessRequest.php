<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

/* Листинг 10.29 */

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $req);
}
