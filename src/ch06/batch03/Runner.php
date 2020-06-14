<?php

namespace vitaliyviznyuk\popp5rus\ch06\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 06.07 */
        $test = ParamHandler::getInstance(__DIR__ . "/params.xml");
        $test->addParam("key1", "val1");
        $test->addParam("key2", "val2");
        $test->addParam("key3", "val3");
        $test->write(); // writing in XML format
        /* /Листинг 06.07 */
    }

    public static function run2()
    {
        /* Листинг 06.08 */
        $test = ParamHandler::getInstance(__DIR__ . "/params.txt");
        $test->read(); // reading in text format
        $params = $test->getAllParams();
        print_r($params);
        /* /Листинг 06.08 */
    }

    public static function run3()
    {
        $file = __DIR__ . "/newparams.txt";
        file_put_contents($file, "key1:val1\nkey2:val2\nkey3:val3\n");

        /* Листинг 06.09 */
        // could return XmlParamHandler or TextParamHandler
        $test = ParamHandler::getInstance($file);

        $test->read();  // could be XmlParamHandler::read() or TextParamHandler::read()
        $test->addParam("newkey1", "newval1");
        $test->write(); // could be XmlParamHandler::write() or TextParamHandler::write()
        /* /Листинг 06.09 */
    }
}
