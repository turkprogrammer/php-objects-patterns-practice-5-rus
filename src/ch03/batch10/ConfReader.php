<?php declare(strict_types=1);
namespace vitaliyviznyuk\popp5rus\ch03\batch10;

/* Листинг 03.28 */
class ConfReader
{

    public function getValues(array $default = null)
    {
        $values = [];

        // do something to get values

/* /Листинг 03.28 */
        $values = ["name" => "mary"];
/* Листинг 03.28 */
        // merge the provided defaults (it will always be an array)
        $values = array_merge($default, $values);
        return $values;
    }
}
/* /Листинг 03.28 */
