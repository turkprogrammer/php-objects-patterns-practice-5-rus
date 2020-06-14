<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $idobj = new EventIdentityObject();
        $idobj->setMinimumStart(time());
        $idobj->setName("A Fine Show");
        $comps = array();
        $name = $idobj->getName();

        if (!is_null($name)) {
            $comps[] = "name = '{$name}'";
        }

        $minstart = $idobj->getMinimumStart();

        if (!is_null($minstart)) {
            $comps[] = "start > {$minstart}";
        }

        $start = $idobj->getStart();

        if (!is_null($start)) {
            $comps[] = "start = '{$start}'";
        }

        $clause = " WHERE " . implode(" and ", $comps);

        print "{$clause}\n";
    }
}
