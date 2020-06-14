<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch07;

class Runner
{
    public static function run()
    {
/* Листинг 09.18 */
        $man = new CommsManager(CommsManager::MEGA);
        print (get_class($man->getApptEncoder())) . "\n";
        $man = new CommsManager(CommsManager::BLOGGS);
        print (get_class($man->getApptEncoder())) . "\n";
/* /Листинг 09.18 */
    }

    public static function run2()
    {
        $man = new CommsManager(CommsManager::MEGA);
        print $man->getHeaderText();
        $man = new CommsManager(CommsManager::BLOGGS);
        print $man->getHeaderText();
    }
}
