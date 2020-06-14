<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch06;

class Controller
{
    private $reg;
    /* Листинг 12.19 */
    // Controller
    private function __construct()
    {
        $this->reg = Registry::instance();
    }

    private function handleRequest()
    {
        $request = $this->reg->getRequest();
        $controller = new AppController();
        $cmd = $controller->getCommand($request);
        $cmd->execute($request);
        $view = $controller->getView($request);
        $view->render($request);
    }
    /* /Листинг 12.19 */

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
}
