<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.15 */

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "TEXT notification: {$message}\n";
    }
}
/* /Листинг 08.15 */
