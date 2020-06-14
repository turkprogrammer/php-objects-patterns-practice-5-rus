<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch01;

class Runner
{
    public static function run()
    {
        // runner code here
        $helper = new ApplicationHelper();
        $helper->getOptions();
    }
}
