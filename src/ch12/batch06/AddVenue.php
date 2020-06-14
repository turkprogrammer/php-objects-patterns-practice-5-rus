<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch12\batch06;

/* Листинг 12.31 */
class AddVenue extends Command
{
    public function doExecute(Request $request): int
    {
        $name = $request->getProperty("venue_name");

        if (is_null($name)) {
            $request->addFeedback("no name provided");
            return self::CMD_INSUFFICIENT_DATA;
        } else {
            // do some stuff
            $request->addFeedback("'{$name}' added");
            return self::CMD_OK;
        }

        return self::CMD_DEFAULT;
    }
}
/* /Листинг 12.31 */
