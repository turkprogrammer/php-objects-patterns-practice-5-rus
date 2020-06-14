<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch08;

use popp\ch12\batch06\Registry;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        include(__DIR__ . "/addvenue.php");
    }

    public static function run2()
    {
        $reg = Registry::instance();
        $reg->reset();
        $_SERVER['argv'] = [];
        $_SERVER['argv'][] = 'submitted=yes';
        include(__DIR__ . "/addvenue.php");
    }

    public static function run3()
    {
        $reg = Registry::instance();
        $reg->reset();
        $_SERVER['argv'] = [];
        $_SERVER['argv'][] = 'submitted=yes';
        $_SERVER['argv'][] = 'venue_name=bob';
        include(__DIR__ . "/addvenue.php");
    }
}
