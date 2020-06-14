<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch04;

class Registry
{
    private static $instance = null;
    private $request = null;
/* Листинг 12.06 */

    // class Registry

    private $treeBuilder = null;
    private $conf = null;

    // ...

/* /Листинг 12.06 */
/* Листинг 12.07 */

    // class Registry

    private static $testmode = false;

    // ...
/* /Листинг 12.07 */
    private function __construct()
    {
    }

/* Листинг 12.07 */

    public static function testMode(bool $mode = true)
    {
        self::$instance = null;
        self::$testmode = $mode;
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            if (self::$testmode) {
                self::$instance = new MockRegistry();
            } else {
                self::$instance = new self();
            }
        }

        return self::$instance;
    }
/* /Листинг 12.07 */

    public function getRequest(): Request
    {
        if (is_null($this->request)) {
            $this->request = new Request();
        }

        return $this->request;
    }

/* Листинг 12.06 */
    public function treeBuilder(): TreeBuilder
    {
        if (is_null($this->treeBuilder)) {
            $this->treeBuilder = new TreeBuilder($this->conf()->get('treedir'));
        }

        return $this->treeBuilder;
    }

    public function conf(): Conf
    {
        if (is_null($this->conf)) {
            $this->conf = new Conf();
        }

        return $this->conf;
    }
/* /Листинг 12.06 */
}
