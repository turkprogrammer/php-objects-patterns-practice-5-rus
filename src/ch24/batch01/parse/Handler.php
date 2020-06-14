<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\parse;

/* Листинг 24.16 */

interface Handler
{
    public function handleMatch(
        Parser $parser,
        Scanner $scanner
    );
}
