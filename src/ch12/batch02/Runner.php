<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch02;

class Runner
{
    public static function run()
    {
/* Листинг 12.04 */
        $reg = Registry::instance();
        print_r($reg->getRequest());
/* /Листинг 12.04 */
    }
}
