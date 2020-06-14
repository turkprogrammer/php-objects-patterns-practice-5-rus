<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch03;

/* Листинг 12.05 */
class Registry
{
    private static $instance = null;
    private $values = [];

    private function __construct()
    {
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }

        return null;
    }

    public function set(string $key, $value)
    {
        $this->values[$key] = $value;
    }
}
/* /Листинг 12.05 */
