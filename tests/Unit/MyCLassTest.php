<?php
namespace Tests\Unit;
Use PHPUnit\Framework\TestCase;
require_once 'MyClass.php';
use MyClass;

class MyClassTest extends TestCase {
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
 }
}
