<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch06;

/* Листинг 12.30 */

abstract class Command
{
    /* l-isting 12.20 */
    const CMD_DEFAULT = 0;
    const CMD_OK = 1;
    const CMD_ERROR = 2;
    const CMD_INSUFFICIENT_DATA = 3;

    /* /l-isting 12.20 */

    final public function __construct()
    {
    }

    public function execute(Request $request)
    {
        $status = $this->doExecute($request);
        $request->setCmdStatus($status);
    }

    abstract public function doExecute(Request $request): int;
}
/* /Листинг 12.30 */
