<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

class MessageSystem
{
    public function send(string $mail, string $msg, string $topic): bool
    {
        print "sending $mail: $topic: $msg\n";
        return true;
    }

    public function getError(): string
    {
        return "move along now, nothing to see here";
    }
}
