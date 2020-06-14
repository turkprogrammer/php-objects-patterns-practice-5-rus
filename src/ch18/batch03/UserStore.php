<?php
declare(strict_types=1);

/* Листинг 18.10 */

namespace vitaliyviznyuk\popp5rus\ch18\batch03;

class UserStore
{
    private $users = [];

    public function addUser(string $name, string $mail, string $pass)
    {
        if (isset($this->users[$mail])) {
            throw new \Exception(
                "User {$mail} already in the system"
            );
        }

        $this->users[$mail] = new User($name, $mail, $pass);

        return true;
    }

    public function notifyPasswordFailure(string $mail)
    {
        if (isset($this->users[$mail])) {
            $this->users[$mail]->failed(time());
        }
    }

    public function getUser(string $mail)
    {
        if (isset($this->users[$mail])) {
            return ($this->users[$mail]);
        }

        return null;
    }
}
