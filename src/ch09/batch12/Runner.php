<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch12;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 09.34 */
        $factory = new TerrainFactory(
            new EarthSea(-1),
            new EarthPlains(),
            new EarthForest()
        );
        /* /Листинг 09.34 */
        print_r($factory->getSea());
        print_r($factory->getPlains());
        print_r($factory->getForest());
    }
}
