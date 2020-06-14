<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch02;

/* Листинг 11.13 */

abstract class Question
{
    protected $prompt;
    protected $marker;

    public function __construct(string $prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    public function mark(string $response): bool
    {
        return $this->marker->mark($response);
    }
}
