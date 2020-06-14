<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch08;

/* Листинг 04.92 */
class Mailer
{
    public function doMail(Product $product)
    {
        print "    mailing ({$product->name})\n";
    }
}
