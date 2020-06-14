<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch02;

/* Листинг 11.18 */
class MatchMarker extends Marker
{
    public function mark(string $response): bool
    {
        return ($this->test == $response);
    }
}
