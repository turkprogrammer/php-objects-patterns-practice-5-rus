<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch10;

/* Листинг 09.28 */

abstract class CommsManager
{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;

    abstract public function getHeaderText(): string;

    abstract public function make(int $flag_int): Encoder;

    abstract public function getFooterText(): string;
}
