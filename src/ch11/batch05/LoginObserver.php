<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch05;

/* Листинг 11.29 */

abstract class LoginObserver implements Observer
{
    private $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    public function update(Observable $observable)
    {
        if ($observable === $this->login) {
            $this->doUpdate($observable);
        }
    }

    abstract public function doUpdate(Login $login);
}
