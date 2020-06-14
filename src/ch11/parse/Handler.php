<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

interface Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner);
}
