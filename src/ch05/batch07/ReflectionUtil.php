<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch07;

/* Листинг 05.38 */

class ReflectionUtil
{
    public static function getClassSource(\ReflectionClass $class): string
    {
        $path = $class->getFileName();
        $lines = @file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }
    /* /Листинг 05.38 */


    /* Листинг 05.42 */

    // class ReflectionUtil
    public static function getMethodSource(\ReflectionMethod $method): string
    {
        $path = $method->getFileName();
        $lines = @file($path);
        $from = $method->getStartLine();
        $to = $method->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }
    /* /Листинг 05.42 */
    /* Листинг 05.38 */
}
/* /Листинг 05.38 */
