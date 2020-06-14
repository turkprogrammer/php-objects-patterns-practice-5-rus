<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch05;

/* Листинг 12.18 */

class DefaultCommand extends Command
{
    public function doExecute(Request $request)
    {
        $request->addFeedback("Welcome to WOO");
        include(__DIR__ . "/main.php");
    }
}
/* /Листинг 12.18 */
