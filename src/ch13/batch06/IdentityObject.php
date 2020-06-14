<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch06;

/* Листинг 13.35 */
class IdentityObject
{
    private $name = null;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
/* /Листинг 13.35 */
