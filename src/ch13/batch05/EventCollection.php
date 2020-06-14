<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

class EventCollection extends Collection
{
    public function targetClass(): string
    {
        return Event::class;
    }
}
