<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\marklogic;

use popp\ch24\batch01\parse\Handler;
use popp\ch24\batch01\parse\Parser;
use popp\ch24\batch01\parse\Scanner;

use popp\ch24\batch01\interpreter\BooleanOrExpression;

/* Листинг 24.20 */
class BooleanOrHandler implements Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner)
    {
        $comp1 = $scanner->getContext()->popResult();
        $comp2 = $scanner->getContext()->popResult();
        $scanner->getContext()->pushResult(new BooleanOrExpression($comp1, $comp2));
    }
}
