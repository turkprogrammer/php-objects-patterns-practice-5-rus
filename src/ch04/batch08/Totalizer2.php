<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch08;

class Totalizer2
{
    public static function warnAmount($amt)
    {
        $count = 0;

        return function ($product) use ($amt, &$count) {
            $count += $product->price;
            print "   count: $count\n";
            if ($count > $amt) {
                print "   high price reached: {$count}\n";
            }
        };
    }
}
