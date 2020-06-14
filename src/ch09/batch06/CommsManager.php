<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

/* Листинг 09.16 */

class CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }
}
