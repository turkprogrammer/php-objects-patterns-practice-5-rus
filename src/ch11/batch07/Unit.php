<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch07;

/* Листинг 11.37 */

abstract class Unit
{
    // ...

    /* /Листинг 11.37 */
    public function getComposite(): Unit
    {
        return null;
    }

    abstract public function bombardStrength(): int;

    /* Листинг 11.37 */
    public function textDump($num = 0): string
    {
        $txtout = "";
        $pad = 4 * $num;
        $txtout .= sprintf("%{$pad}s", "");
        $txtout .= get_class($this) . ": ";
        $txtout .= "bombard: " . $this->bombardStrength() . "\n";

        return $txtout;
    }
    // ...

    /* /Листинг 11.37 */

    public function unitCount(): int
    {
        return 1;
    }
    /* Листинг 11.37 */
}
/* /Листинг 11.37 */
