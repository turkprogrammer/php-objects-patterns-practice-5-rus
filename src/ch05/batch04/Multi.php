<?php

/* Листинг 05.12 */
namespace com\getinstance\util {

    class Debug
    {
        public static function helloWorld()
        {
            print "hello from Debug\n";
        }
    }
}

namespace other {

    \com\getinstance\util\Debug::helloWorld();
}
/* /Листинг 05.12 */
