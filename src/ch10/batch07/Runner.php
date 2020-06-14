<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch07;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 10.35 */
        $process = new AuthenticateRequest(new StructureRequest(
            new LogRequest(
                new MainProcess()
            )
        ));
        $process->process(new RequestHelper());
        /* /Листинг 10.35 */
    }
}
