<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch08;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.21 */

        $writer = new ShopProductWriter();
        $writer->write(new Wrong());

        /* /Листинг 03.21 */
    }
}
