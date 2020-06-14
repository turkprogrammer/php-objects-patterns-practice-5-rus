<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch08;

/* Листинг 09.23 */

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCal header\n";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal footer\n";
    }
}
