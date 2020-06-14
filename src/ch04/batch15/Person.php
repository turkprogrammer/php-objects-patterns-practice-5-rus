<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch15;

/* Листинг 04.71 */
class Person
{
    public function __get(string $property)
    {
        $method = "get{$property}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

/* /Листинг 04.71 */
/* Листинг 04.72 */
    public function __isset(string $property)
    {
        $method = "get{$property}";
        return (method_exists($this, $method));
    }
/* /Листинг 04.72 */
/* Листинг 04.71 */
    public function getName(): string
    {
        return "Bob";
    }

    public function getAge(): int
    {
        return 44;
    }
}
/* /Листинг 04.71 */
