<?php

namespace vitaliyviznyuk\popp5rus\ch12\batch08;

require_once(__DIR__ . "/../../../vendor/autoload.php");

/* Листинг 12.35 */
$addvenue = new AddVenueController();
$addvenue->init();
$addvenue->process();
/* /Листинг 12.35 */
