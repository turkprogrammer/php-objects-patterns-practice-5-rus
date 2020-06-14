<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch09;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $conf = new Conf(__DIR__ . "/conf01.xml");
        print "user: " . $conf->get('user') . "\n";
        print "host: " . $conf->get('host') . "\n";
        $conf->set("pass", "newpass2");
        $conf->write();
    }
}
