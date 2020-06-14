<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch01;

/* Листинг 11.01 */

abstract class Expression
{
    private static $keycount = 0;
    private $key;

    abstract public function interpret(InterpreterContext $context);

    public function getKey()
    {
        if (!isset($this->key)) {
            self::$keycount++;
            $this->key = self::$keycount;
        }

        return $this->key;
    }
}
