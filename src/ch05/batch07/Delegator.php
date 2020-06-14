<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch05\batch07;

class Delegator
{
    private $thirdpartyShop;

    public function __construct()
    {
        $this->thirdpartyShop = new OtherShop();
    }

/* Листинг 05.33 */
    public function __call($method, $args)
    {
        if (method_exists($this->thirdpartyShop, $method)) {
            return call_user_func_array(
                [
                    $this->thirdpartyShop,
                    $method
                ],
                $args
            );
        }
    }
/* /Листинг 05.33 */
}
