<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch15\batch01;

class Runner
{
    public static function run()
    {
/* Листинг 15.09 */
        $earthgame = new EarthGame(
            5,
            "earth",
            true,
            true
        );
        $earthgame::generateTile(5, true);
/* /Листинг 15.09 */
    }
}
