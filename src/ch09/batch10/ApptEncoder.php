<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch10;

abstract class ApptEncoder implements Encoder
{
    abstract public function encode(): string;
}
