<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch11;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 09.32 */
        $factory = new TerrainFactory(
            new EarthSea(),
            new EarthPlains(),
            new EarthForest()
        );
        print_r($factory->getSea());
        print_r($factory->getPlains());
        print_r($factory->getForest());
        /* /Листинг 09.32 */
    }
}
