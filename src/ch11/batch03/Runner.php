<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $login = new Login();
        for ($x = 1; $x < 20; $x++) {
            $login->handleLogin("bob", "mypass", '158.152.55.35');
        }
    }
}
