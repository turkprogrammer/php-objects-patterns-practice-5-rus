<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

class Runner
{
    public static function run()
    {
        $mgr = new CommsManager();
        $encoder = $mgr->getApptEncoder();
        $out = $encoder->encode();
        print "{$out}\n";
    }
}
