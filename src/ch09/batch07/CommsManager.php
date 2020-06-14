<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch07;

/* Листинг 09.19 */

/* Листинг 09.17 */

class CommsManager
{
    const BLOGGS = 1;
    const MEGA = 2;
    private $mode;

    public function __construct(int $mode)
    {
        $this->mode = $mode;
    }

    public function getApptEncoder(): ApptEncoder
    {
        switch ($this->mode) {
            case (self::MEGA):
                return new MegaApptEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }

    /* /Листинг 09.17 */
    public function getHeaderText(): string
    {
        switch ($this->mode) {
            case (self::MEGA):
                return "MegaCal header\n";
            default:
                return "BloggsCal header\n";
        }
    }
    /* Листинг 09.17 */
}
