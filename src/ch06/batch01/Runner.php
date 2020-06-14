<?php

namespace vitaliyviznyuk\popp5rus\ch06\batch01;

require_once("src/ch06/batch01/paramreader.php");

class Runner
{
    public static function run()
    {
/* Листинг 06.02 */
        $file = __DIR__."/params.txt";
        $params = [
            "key1" => "val1",
            "key2" => "val2",
            "key3" => "val3",
        ];
        writeParams($params, $file);
        $output = readParams($file);
        print_r($output);
/* /Листинг 06.02 */
    }
}
