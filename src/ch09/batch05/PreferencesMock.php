<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch05;

class PreferencesMock
{
    public function getDsn()
    {
        return "** test DSN\n";
    }
}
