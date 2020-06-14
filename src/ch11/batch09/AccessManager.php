<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

class AccessManager
{
    public function login(string $user, string $pass): User
    {
        $ret = new User($user);
        return $ret;
    }

    public function getError(): string
    {
        return "move along now, nothing to see here";
    }
}
