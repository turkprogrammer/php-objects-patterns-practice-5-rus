<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch06;

class DefaultCommand extends Command
{
    public function doExecute(Request $request): int
    {
        $request->addFeedback("Welcome to WOO");
        return Command::CMD_DEFAULT;
    }
}
