<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch06;

class ApplicationHelper
{
    private $config = __DIR__ . "/data/woo_options.ini";
    private $reg;

    public function __construct()
    {
        $this->reg = Registry::instance();
    }

    public function init()
    {
        $this->setupOptions();

        if (isset($_SERVER['REQUEST_METHOD'])) {
            $request = new HttpRequest();
        } else {
            $request = new CliRequest();
        }

        $this->reg->setRequest($request);
    }

    /* Листинг 12.29 */
    private function setupOptions()
    {
        //...
        /* /Листинг 12.29 */
        if (!file_exists($this->config)) {
            throw new AppException("Could not find options file");
        }

        $options = parse_ini_file($this->config, true);
        $conf = new Conf($options['config']);
        $this->reg->setConf($conf);

        /* Листинг 12.29 */
        $vcfile = $conf->get("viewcomponentfile");
        $cparse = new ViewComponentCompiler();

        $commandandviewdata = $cparse->parseFile($vcfile);
        $this->reg->setCommands($commandandviewdata);
    }
    /* /Листинг 12.29 */
}
