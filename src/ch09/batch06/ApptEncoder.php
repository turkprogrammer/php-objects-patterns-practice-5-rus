<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch06;

/* Листинг 09.13 */
abstract class ApptEncoder
{
    abstract public function encode(): string;
}
