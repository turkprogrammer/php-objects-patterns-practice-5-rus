<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch02;

class Runner
{
    public static function run()
    {
/* Листинг 09.07 */
        $boss = new NastyBoss();
        $boss->addEmployee(new Minion("harry"));
        $boss->addEmployee(new CluedUp("bob"));
        $boss->addEmployee(new Minion("mary"));
        $boss->projectFails();
        $boss->projectFails();
        $boss->projectFails();
/* /Листинг 09.07 */
    }
}
