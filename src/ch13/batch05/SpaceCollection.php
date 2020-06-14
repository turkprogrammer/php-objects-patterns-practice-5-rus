<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch13\batch05;

class SpaceCollection extends Collection
{

    public function targetClass(): string
    {
        return Space::class;
    }
}
