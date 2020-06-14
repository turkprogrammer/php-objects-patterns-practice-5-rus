<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

/* Листинг 09.15 */
class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}
