<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch09\batch14;

class Runner
{
    public static function run()
    {
/* Листинг 09.40 */
        $assembler = new ObjectAssembler("src/ch09/batch14/objects.xml");
        $apptmaker = $assembler->getComponent("\\popp\\ch09\\batch14\\AppointmentMaker2");
        $out = $apptmaker->makeAppointment();
        print $out;
/* /Листинг 09.40 */
    }
}
