<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch08;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 05.52 */
        $test = new ModuleRunner();
        $test->init();
        /* /Листинг 05.52 */
    }
}
