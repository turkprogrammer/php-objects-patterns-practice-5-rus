<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch01;

/* Листинг 11.02 */
class LiteralExpression extends Expression
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}
