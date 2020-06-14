<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch02;

use popp\ch11\parse\MarkParse;

/* Листинг 11.17 */
class MarkLogicMarker extends Marker
{
    private $engine;

    public function __construct(string $test)
    {
        parent::__construct($test);
        $this->engine = new MarkParse($test);
    }

    public function mark(string $response): bool
    {
        return $this->engine->evaluate($response);
    }
}
