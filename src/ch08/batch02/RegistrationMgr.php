<?php declare(strict_types=1);
namespace vitaliyviznyuk\popp5rus\ch08\batch02;

/* Листинг 08.12 */
class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        // do something with this Lesson

        // now tell someone
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }
}
/* /Листинг 08.12 */
