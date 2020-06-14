<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch12;

use popp\ch11\batch08\Unit;

/* Листинг 11.58 */

class NullUnit extends Unit
{
    public function bombardStrength(): int
    {
        return 0;
    }

    public function getHealth(): int
    {
        return 0;
    }

    public function getDepth(): int
    {
        return 0;
    }

    /* /Листинг 11.58 */

    public function isNull(): bool
    {
        return true;
    }
    /* Листинг 11.58 */
}
/* /Листинг 11.58 */
