<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch23;

/* Листинг 04.89 */

class ProcessSale
{
    private $callbacks;

    public function registerCallback(callable $callback)
    {
        if (!is_callable($callback)) {
            throw new Exception("callback not callable");
        }
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product)
    {
        print "{$product->name}: processing \n";
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}
/* /Листинг 04.89 */
