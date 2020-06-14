<?php declare(strict_types=1);
namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.14 */
class MailNotifier extends Notifier
{
    public function inform($message)
    {
        print "MAIL notification: {$message}\n";
    }
}
/* /Листинг 08.14 */
