<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\parse;

/* Листинг 24.08 */
class CharacterParse extends Parser
{
    private $char;

    public function __construct($char, $name = null, $options = null)
    {
        parent::__construct($name, $options);
        $this->char = $char;
    }

    public function trigger(Scanner $scanner): bool
    {
        return ( $scanner->token() == $this->char );
    }

    protected function doScan(Scanner $scanner): bool
    {
        return ( $this->trigger($scanner) );
    }
}
