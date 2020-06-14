<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch10;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $mgr = new BloggsCommsManager();
        print $mgr->getHeaderText();
        print $mgr->make(CommsManager::APPT)->encode();
        print $mgr->getFooterText();
    }
}
