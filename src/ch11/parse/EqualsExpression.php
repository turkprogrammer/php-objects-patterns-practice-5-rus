<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

class EqualsExpression extends OperatorExpression
{
    protected function doInterpret(
        Context $context,
        $result_l,
        $result_r
    ) {
            $context->replace($this, $result_l == $result_r);
    }
}
