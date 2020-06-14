<?php
declare(strict_types = 1);

/* Листинг 18.06 */
namespace vitaliyviznyuk\popp5rus\ch18\batch02;

class UserStoreTest extends \PHPUnit_Framework_TestCase
{
    private $store;

    public function setUp()
    {
        $this->store = new UserStore();
    }
/* /Листинг 18.06 */

    public function testAddUserShortPass2()
    {
        try {
            $this->store->addUser("bob williams", "bob@example.com", "ff");
            $this->fail("Short password exception expected");
        } catch (\Exception $e) {
        }
        // ...
    }

/* Листинг 18.06 */

    public function testAddUserShortPass()
    {
        // uncomment for > phpunit 5.2.0 

        //$this->expectException('\\Exception');
        //$this->store->addUser("bob williams", "a@b.com", "ff");
        //$this->fail("Short password exception expected");
    }
/* /Листинг 18.06 */

/* Листинг 18.08 */

    // UserStoreTest

    public function testAddUserDuplicate()
    {
        try {
            $ret = $this->store->addUser("bob williams", "a@b.com", "123456");
            $ret = $this->store->addUser("bob stevens", "a@b.com", "123456");
            self::fail("Exception should have been thrown");
        } catch (\Exception $e) {
            $const = $this->logicalAnd(
                $this->logicalNot($this->contains("bob stevens")),
                $this->isType('array')
            );
            self::AssertThat($this->store->getUser("a@b.com"), $const);
        }
    }
/* /Листинг 18.08 */

    public function testGetUser()
    {
        $this->store->addUser("bob williams", "a@b.com", "12345");
        $user = $this->store->getUser("a@b.com");
        $this->assertEquals($user['mail'], "a@b.com");
        $this->assertEquals($user['name'], "bob williams");
        $this->assertEquals($user['pass'], "12345");
    }
/* Листинг 18.06 */
}
/* /Листинг 18.06 */
