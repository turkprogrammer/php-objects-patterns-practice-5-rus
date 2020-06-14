<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

/* Листинг 04.47 */
class Document extends DomainObject
{
    public static function create(): Document
    {
        return new Document();
    }
}
