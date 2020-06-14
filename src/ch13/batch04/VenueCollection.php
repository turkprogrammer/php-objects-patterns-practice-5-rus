<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch04;

class VenueCollection extends Collection
{
    public function targetClass()
    {
        return Venue::class;
    }
}
