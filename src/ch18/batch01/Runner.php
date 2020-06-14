<?php
declare(strict_types = 1);

namespace vitaliyviznyuk\popp5rus\ch18\batch01;

class Runner
{
    public static function run()
    {
/* Листинг 18.02 */
        $store = new UserStore();
        $store->addUser(
            "bob williams",
            "bob@example.com",
            "12345"
        );
        $store->notifyPasswordFailure("bob@example.com");
        $user = $store->getUser("bob@example.com");
        print_r($user);
/* /Листинг 18.02 */
    }

    public static function run2()
    {
/* Листинг 18.04 */
        $store = new UserStore();
        $store->addUser("bob williams", "bob@example.com", "12345");
        $validator = new Validator($store);
        if ($validator->validateUser("bob@example.com", "12345")) {
            print "pass, friend!\n";
        }
/* /Листинг 18.04 */
    }
}
