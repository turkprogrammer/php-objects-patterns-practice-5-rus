<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch18\batch03;

class Validator
{
    private $store;

    public function __construct(UserStore $store)
    {
        $this->store = $store;
    }

    public function validateUser($mail, $pass)
    {
        if (!is_array($user = $this->store->getUser($mail))) {
            return false;
        }

        if ($user['pass'] == $pass) {
            return true;
        }

        $this->store->notifyPasswordFailure($mail);

        return false;
    }
}
