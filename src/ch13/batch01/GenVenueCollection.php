<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch01;

class GenVenueCollection extends GenCollection
{
    public function targetClass(): string
    {
        return Venue::class;
    }
}
