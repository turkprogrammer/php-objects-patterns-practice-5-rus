<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch06;

class Delegator
{
    private $thirdpartyShop;

    public function __construct()
    {
        $this->thirdpartyShop = new OtherShop();
    }

    /* Листинг 05.32 */
    public function __call($method, $args)
    {
        if (method_exists($this->thirdpartyShop, $method)) {
            return $this->thirdpartyShop->$method();
        }
    }
    /* /Листинг 05.32 */
}
