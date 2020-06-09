<?php

namespace vitaliyviznyuk\popp5rus\ch03\batch09;

class Runner
{
    public static function run()
    {
        /* Листинг 03.23 */

        // Не сработает!
        $product = new ShopProduct('Название', 'Имя', 'Фамилия', []);

        /* /Листинг 03.23 */

        /* Листинг 03.24 */

        $product = new ShopProduct('Название', 'Имя', 'Фамилия', '4.22');

        /* /Листинг 03.24 */

        print $product->getPrice();

        $manager = new AddressManager();

        /* Листинг 03.26 */

        $manager->outputAddresses('false');

        /* /Листинг 03.26 */
    }
}
