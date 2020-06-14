<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch09;

class AddressManager
{
    private $addresses = array( "209.131.36.159", "216.58.213.174" );

/* Листинг 03.25 */
    public function outputAddresses(bool $resolve)
    {
        // ...
/* /Листинг 03.25 */
        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve) {
                print " (".gethostbyaddr($address).")";
            }
            print "\n";
        }
/* Листинг 03.25 */
    }
/* /Листинг 03.25 */
}
