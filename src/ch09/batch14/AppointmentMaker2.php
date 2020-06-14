<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch14;

use popp\ch09\batch06\BloggsApptEncoder;
use popp\ch09\batch06\ApptEncoder;

/* Листинг 09.38 */

class AppointmentMaker2
{
    private $encoder;

    public function __construct(ApptEncoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function makeAppointment()
    {
        return $this->encoder->encode();
    }
}
