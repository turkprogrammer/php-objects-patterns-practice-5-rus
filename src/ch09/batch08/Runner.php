<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch08;

class Runner
{
    public static function run()
    {
/* Листинг 09.24 */
        $mgr = new BloggsCommsManager();
        print $mgr->getHeaderText();
        print $mgr->getApptEncoder()->encode();
        print $mgr->getFooterText();
/* /Листинг 09.24 */
    }
}
