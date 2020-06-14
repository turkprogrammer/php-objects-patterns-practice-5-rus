<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch01;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 09.04 */
        $boss = new NastyBoss();
        $boss->addEmployee("harry");
        $boss->addEmployee("bob");
        $boss->addEmployee("mary");
        $boss->projectFails();
        /* /Листинг 09.04 */
    }
}
