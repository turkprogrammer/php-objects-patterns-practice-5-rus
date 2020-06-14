<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch18\batch04\mapper;

class VenueCollection extends Collection implements VenueCollection
{
    public function targetClass()
    {
        return "{$this->package}\\Venue";
    }
}
