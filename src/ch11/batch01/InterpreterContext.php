<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch01;

/* Листинг 11.03 */

class InterpreterContext
{
    private $expressionstore = [];

    public function replace(Expression $exp, $value)
    {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionstore[$exp->getKey()];
    }
}
