<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch12;

/* Листинг 09.33 */
class Sea
{
    private $navigability = 0;

    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
}
