<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch02;

/* Листинг 11.16 */

abstract class Marker
{
    protected $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response): bool;
}
