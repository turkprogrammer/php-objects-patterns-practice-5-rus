<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $settings = simplexml_load_file(__DIR__ . "/resolve.xml");
        $manager = new AddressManager();
        $manager->outputAddresses((string)$settings->resolvedomains);
    }
}
