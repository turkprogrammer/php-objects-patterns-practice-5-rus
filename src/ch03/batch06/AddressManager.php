<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch06;

class AddressManager
{
    private $addresses = ['209.131.36.159', '216.58.213.174'];

    /* Листинг 03.17 */

    public function outputAddresses($resolve)
    {
        if (is_string($resolve)) {
            $resolve = (preg_match('/^(false|no|off)$/i', $resolve)) ? false : true;
        }

        // ...
        /* /Листинг 03.17 */

        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve) {
                print ' (' . gethostbyaddr($address) . ')';
            }
            print "\n";
        }

        /* Листинг 03.17 */

    }

    /* /Листинг 03.17 */
}
