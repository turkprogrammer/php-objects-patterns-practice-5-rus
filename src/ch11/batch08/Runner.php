<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch08;

class Runner
{
    public static function run()
    {
/* Листинг 11.43 */
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());
        $main_army->addUnit(new Cavalry());

        $textdump = new TextDumpArmyVisitor();
        $main_army->accept($textdump);
        print $textdump->getText();
/* /Листинг 11.43 */
    }

    public static function run2()
    {
/* Листинг 11.45 */
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());
        $main_army->addUnit(new Cavalry());

        $taxcollector = new TaxCollectionVisitor();
        $main_army->accept($taxcollector);
        print $taxcollector->getReport();
        print "TOTAL: ";
        print $taxcollector->getTax() . "\n";
/* /Листинг 11.45 */
    }
}
