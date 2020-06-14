<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch01;

/* Листинг 13.06 */
class VenueCollection extends Collection
{
    public function targetClass(): string
    {
        return Venue::class;
    }
}
