<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01;

class MatchMarker extends Marker
{
    public function mark(string $response): bool
    {
        return ( $this->test == $response );
    }
}
