<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

class StringLiteralHandler implements Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner)
    {
        $value = $scanner->popResult();
        $scanner->pushResult(new LiteralExpression($value));
    }
}
