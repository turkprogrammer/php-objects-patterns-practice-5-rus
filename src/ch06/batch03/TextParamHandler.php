<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch06\batch03;

/* Листинг 06.06 */

class TextParamHandler extends ParamHandler
{

    public function write(): bool
    {
        // write text
        // using $this->params
        /* /Листинг 06.06 */
        $fh = $this->openSource('w');
        foreach ($this->params as $key => $val) {
            fputs($fh, "$key:$val\n");
        }
        fclose($fh);
        return true;
        /* Листинг 06.06 */
    }

    public function read(): bool
    {
        // read text
        // and populate $this->params
        /* /Листинг 06.06 */
        $lines = file($this->source);
        foreach ($lines as $line) {
            $line = trim($line);
            list($key, $val) = explode(':', $line);
            $this->params[$key] = $val;
        }
        return true;
        /* Листинг 06.06 */
    }
}
