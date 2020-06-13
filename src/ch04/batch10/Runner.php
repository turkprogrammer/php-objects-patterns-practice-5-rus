<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch10;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        try {
            $conf = new Conf(__DIR__ . '/conf01.xml');

            //$conf = new Conf( __DIR__ . "/conf.unwriteable.xml" );
            //$conf = new Conf( "nonexistent/not_there.xml" );

            print 'user: ' . $conf->get('user') . "\n";
            print 'host: ' . $conf->get('host') . "\n";

            $conf->set('pass', 'newpass');
            $conf->write();

        } catch (\Exception $e) {
            die($e->__toString());
        }
    }
}
