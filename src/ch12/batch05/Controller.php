<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch05;

/* Листинг 12.09 */

class Controller
{
    private $reg;

    private function __construct()
    {
        $this->reg = Registry::instance();
    }

    /**
     * @return void
     */
    public static function run(): void
    {
        $instance = new Controller();
        $instance->init();
        $instance->handleRequest();
    }

    private function init()
    {
        $this->reg->getApplicationHelper()->init();
    }

    private function handleRequest()
    {
        $request = $this->reg->getRequest();
        $resolver = new CommandResolver();
        $cmd = $resolver->getCommand($request);
        $cmd->execute($request);
    }
}
/* /Листинг 12.09 */
