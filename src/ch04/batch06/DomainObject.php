<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06;

/* Листинг 04.48 */
abstract class DomainObject
{
    public static function create(): DomainObject
    {
        return new static();
        //return new self();
    }
}
