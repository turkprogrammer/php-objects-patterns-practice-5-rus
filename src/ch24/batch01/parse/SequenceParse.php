<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\parse;

/* Листинг 24.10 */

class SequenceParse extends CollectionParse
{
    public function trigger(Scanner $scanner): bool
    {
        if (empty($this->parsers)) {
            return false;
        }

        return $this->parsers[0]->trigger($scanner);
    }

    protected function doScan(Scanner $scanner): bool
    {
        $start_state = $scanner->getState();

        foreach ($this->parsers as $parser) {
            if (!($parser->trigger($scanner) && $parser->scan($scanner))) {
                $scanner->setState($start_state);

                return false;
            }
        }

        return true;
    }
}
