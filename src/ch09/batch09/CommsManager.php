<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch09;

/* Листинг 09.25 */

abstract class CommsManager
{
    abstract public function getHeaderText(): string;

    abstract public function getApptEncoder(): ApptEncoder;

    abstract public function getTtdEncoder(): TtdEncoder;

    abstract public function getContactEncoder(): ContactEncoder;

    abstract public function getFooterText(): string;
}
