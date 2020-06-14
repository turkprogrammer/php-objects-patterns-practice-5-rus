<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch21;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.85 */
        $person = new Person("bob", 44, new Account(200));
        $person->setId(343);
        $person2 = clone $person;

        // give $person some money
        $person->account->balance += 10;
        // $person2 sees the credit too
        print $person2->account->balance;

        // output:
        // 210
        /* /Листинг 04.85 */
    }
}
//done
