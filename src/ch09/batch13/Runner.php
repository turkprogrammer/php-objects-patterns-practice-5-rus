<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch13;

class Runner
{
    public static function run()
    {
        $commsMgr = AppConfig::getInstance()->getCommsManager();
        print $commsMgr->getApptEncoder()->encode();
    }
}
