<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch07;

/* Листинг 13.40 */
class EventIdentityObject extends IdentityObject
{
    public function __construct(string $field = null)
    {
        parent::__construct(
            $field,
            ['name', 'id', 'start', 'duration', 'space']
        );
    }
}
