<?php

namespace vitaliyviznyuk\popp5rus\ch05\batch04\util;

class InSame
{
    /**
     * @return void
     */
    public static function run(): void
    {
        Debug::helloworld();
    }

    public static function runError()
    {
        // popp\ch05\batch04\util\Debug::helloworld();

        \popp\ch05\batch04\util\Debug::helloworld();
    }
}
