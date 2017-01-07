<?php

use Ribas\Tester;

class RunTest extends PHPUnit_Framework_TestCase {

    public function testFirst()
    {
        $t = new Tester();
        $this->assertArrayHasKey('foo', $t->run());
    }

}
