<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\parse;

/* Листинг 24.02 */

class ScannerState
{
    public $line_no;
    public $char_no;
    public $token;
    public $token_type;
    public $r;
}
