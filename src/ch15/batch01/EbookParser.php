<?php
/* Листинг 15.12 */

namespace vitaliyviznyuk\popp5rus\ch15\batch01;

class EbookParser
{
    public function __construct(string $path, $format = 0)
    {
        if ($format > 1) {
            $this->setFormat(1);
        }
    }

    private function setformat(int $format)
    {
        // do something with $format
    }
}
/* /Листинг 15.12 */
