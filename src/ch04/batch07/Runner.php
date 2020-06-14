<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch07;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.56 */
        print_r(User::create());
        print_r(SpreadSheet::create());
        /* /Листинг 04.56 */
    }
}
