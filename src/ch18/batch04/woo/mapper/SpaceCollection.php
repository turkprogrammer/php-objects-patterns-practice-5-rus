<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch18\batch04\mapper;

class SpaceCollection extends Collection implements SpaceCollection
{
    public function targetClass()
    {
        return "{$this->package}\\Space";
    }
}
