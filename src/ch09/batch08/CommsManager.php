<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch08;

/* Листинг 09.22 */

abstract class CommsManager
{
    abstract public function getHeaderText(): string;

    abstract public function getApptEncoder(): ApptEncoder;

    abstract public function getFooterText(): string;
}
