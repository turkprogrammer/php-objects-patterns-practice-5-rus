<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch10\batch06;

class Runner
{
    public static function run()
    {
/* Листинг 10.21 */
        $tile = new PollutedPlains();
        print $tile->getWealthFactor();
/* /Листинг 10.21 */
    }

    public static function run2()
    {
/* Листинг 10.25 */
        $tile = new Plains();
        print $tile->getWealthFactor(); // 2
/* /Листинг 10.25 */
    }

    public static function run3()
    {
/* Листинг 10.26 */
        $tile = new DiamondDecorator(new Plains());
        print $tile->getWealthFactor(); // 4
/* /Листинг 10.26 */
    }

    public static function run4()
    {
/* Листинг 10.27 */
        $tile = new PollutionDecorator(new DiamondDecorator(new Plains()));
        print $tile->getWealthFactor(); // 0
/* /Листинг 10.27 */
    }
}
