<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch05;

/* Листинг 12.16 */

class HttpRequest extends Request
{
    public function init()
    {
        // we're conveniently ignoring POST/GET/etc distinctions
        // don't do that in the real world!
        $this->properties = $_REQUEST;
        $this->path = $_SERVER['PATH_INFO'];
        $this->path = (empty($this->path)) ? "/" : $this->path;
    }
}
/* /Листинг 12.16 */
