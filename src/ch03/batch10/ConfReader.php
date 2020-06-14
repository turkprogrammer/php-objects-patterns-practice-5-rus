<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch10;

/* Листинг 03.28 */

class ConfReader
{

    public function getValues(array $default = null)
    {
        $values = [];

        // Выполнить действия для получения новых значений

        /* /Листинг 03.28 */

        $values = ["name" => "mary"];

        /* Листинг 03.28 */

        // Объединить полученные значения со стандартными
        // (результат всегда будет находиться в массиве)
        $values = array_merge($default, $values);
        return $values;
    }
}

/* /Листинг 03.28 */
