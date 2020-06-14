<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch09;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}
