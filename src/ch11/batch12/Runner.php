<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch12;

class Runner
{

    /**
     * @return void
     */
    public static function run(): void
    {
        $unit = new NullUnit();

        /* Листинг 11.61 */
        if (!$unit->isNull()) {
            // do something
        } else {
            print "null - no action\n";
        }
        /* /Листинг 11.61 */
    }
}
