<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch05;

class Runner
{
    public static function run1()
    {
/* Листинг 03.16 */
        $settings = simplexml_load_file(__DIR__."/resolve.xml");
        $manager = new AddressManager();
        $manager->outputAddresses((string)$settings->resolvedomains);
/* /Листинг 03.16 */
    }
}
