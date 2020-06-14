<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch08;

/* Листинг 09.21 */
class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encode in BloggsCal format\n";
    }
}
