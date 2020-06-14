<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch05;

/* Листинг 12.17 */

class CliRequest extends Request
{
    public function init()
    {
        $args = $_SERVER['argv'];

        foreach ($args as $arg) {
            if (preg_match("/^path:(\S+)/", $arg, $matches)) {
                $this->path = $matches[1];
            } else {
                if (strpos($arg, '=')) {
                    list($key, $val) = explode("=", $arg);
                    $this->setProperty($key, $val);
                }
            }
        }

        $this->path = (empty($this->path)) ? "/" : $this->path;
    }
}
/* /Листинг 12.17 */
