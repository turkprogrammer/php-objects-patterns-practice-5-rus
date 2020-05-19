<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch05;

/* Листинг 03.15 */

class AddressManager
{
    /**
     * @var array
     */
    private array $addresses = ['209.131.36.159', '216.58.213.174'];

    /**
     * @param bool $resolve
     */
    public function outputAddresses($resolve): void
    {
        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve) {
                print ' (' . gethostbyaddr($address) . ')';
            }
            print "\n";
        }
    }
}

/* /Листинг 03.15 */
