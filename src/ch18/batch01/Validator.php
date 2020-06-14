<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch18\batch01;

/* Листинг 18.03 */

class Validator
{
    private $store;

    public function __construct(UserStore $store)
    {
        $this->store = $store;
    }

    public function validateUser(string $mail, string $pass): bool
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
/* /Листинг 18.03 */
