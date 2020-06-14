<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch17;

/* Листинг 04.73 */

class Person
{
    private $myname;
    private $myage;

    public function __set(string $property, $value)
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            return $this->$method($value);
        }
    }
    /* /Листинг 04.73 */
    /* Листинг 04.74 */
    public function __unset(string $property)
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method(null);
        }
    }
    /* /Листинг 04.74 */
    /* Листинг 04.73 */

    public function setName(string $name)
    {
        $this->myname = $name;
        if (!is_null($name)) {
            $this->myname = strtoupper($this->myname);
        }
    }

    public function setAge(int $age)
    {
        $this->myage = $age;
    }
}
/* /Листинг 04.73 */
