<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch06;

/* Листинг 03.15 */

class AddressManager
{
    /**
     * @var array
     */
    private array $addresses = ['209.131.36.159', '216.58.213.174'];

    /* Листинг 03.17 */

    /**
     * @param mixed $resolve
     */
    public function outputAddresses($resolve): void
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

/* /Листинг 03.15 */
