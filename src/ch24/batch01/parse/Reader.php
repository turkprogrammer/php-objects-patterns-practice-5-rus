<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\parse;

/* Листинг 24.04 */
interface Reader
{
    public function getChar();
    public function getPos(): int;
    public function pushBackChar();
}
