<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch01;

/* Листинг 11.08 */
class EqualsExpression extends OperatorExpression
{
    protected function doInterpret(
        InterpreterContext $context,
        $result_l,
        $result_r
    ) {
            $context->replace($this, $result_l == $result_r);
    }
}
