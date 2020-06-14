<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch18\batch04\mapper;

class EventCollection extends Collection implements EventCollection
{
    public function targetClass()
    {
        return "{$this->package}\\Event";
    }
}
