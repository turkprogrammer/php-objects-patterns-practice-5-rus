<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch09;

class Runner
{
    public static function run()
    {
        $mgr = new MegaCommsManager();
        print $mgr->getHeaderText();
        print $mgr->getApptEncoder()->encode();
        print $mgr->getFooterText();
    }
}
