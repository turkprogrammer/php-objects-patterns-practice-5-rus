<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch10;

/* Листинг 09.27 */
interface Encoder
{
    public function encode(): string;
}
