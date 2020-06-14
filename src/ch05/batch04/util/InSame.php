<?php

namespace vitaliyviznyuk\popp5rus\ch05\batch04\util;

class InSame
{
    public static function run()
    {
        Debug::helloworld();
    }

    public static function runError()
    {
        // popp\ch05\batch04\util\Debug::helloworld();

        \popp\ch05\batch04\util\Debug::helloworld();
    }
}
