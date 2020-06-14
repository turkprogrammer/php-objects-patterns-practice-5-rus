<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch05;

class Tank extends Unit
{
    public function bombardStrength(): int
    {
        return 4;
    }
}
