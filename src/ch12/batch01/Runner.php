<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch01;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here
        $helper = new ApplicationHelper();
        $helper->getOptions();
    }
}
