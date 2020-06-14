<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

/* Листинг 09.14 */
class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format\n";
    }
}
