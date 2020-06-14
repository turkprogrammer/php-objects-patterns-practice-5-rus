<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $mgr = new CommsManager();
        $encoder = $mgr->getApptEncoder();
        $out = $encoder->encode();
        print "{$out}\n";
    }
}
