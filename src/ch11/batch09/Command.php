<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

use popp\ch11\batch09\CommandContext;

/* Листинг 11.46 */

abstract class Command
{
    abstract public function execute(CommandContext $context): bool;
}
