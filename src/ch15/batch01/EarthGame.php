<?php
/* Листинг 15.05 */
namespace vitaliyviznyuk\popp5rus\ch15\batch01;

use popp\ch10\batch06\PollutionDecorator;
use popp\ch10\batch06\DiamondDecorator;
use popp\ch10\batch06\Plains;

// begin class
/* /Листинг 15.05 */
/* Листинг 15.06 */
/*
class EarthGame extends Game implements
    Playable,
    Savable
*/
class EarthGame extends Game implements Playable, Savable
{
/* /Листинг 15.06 */
/* Листинг 15.08 */
    public function __construct(
        int $size,
        string $name,
        bool $wraparound = false,
        bool $aliens = false
    ) {
        // implementation
    }
/* /Листинг 15.08 */
/* Листинг 15.07 */
    final public static function generateTile(int $diamondCount, bool $polluted = false)
    {
        // implementation
/* /Листинг 15.07 */
/* Листинг 15.10 */
        $tile = [];
        for ($x = 0; $x < $diamondCount; $x++) {
            if ($polluted) {
                $tile[] = new PollutionDecorator(new DiamondDecorator(new Plains()));
            } else {
                $tile[] = new DiamondDecorator(new Plains());
            }
        }
/* /Листинг 15.10 */
        return $tile;
/* Листинг 15.07 */
    }
/* /Листинг 15.07 */

/* Листинг 15.06 */
}
/* /Листинг 15.06 */
