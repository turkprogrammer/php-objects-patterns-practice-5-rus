<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch21;

/* Листинг 04.83 */

class Account
{
    public $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
//done
