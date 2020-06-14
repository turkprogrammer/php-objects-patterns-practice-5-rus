<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01;

abstract class Marker
{
    protected $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response): bool;
}
