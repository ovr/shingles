<?php

namespace Test;

class ShinglesTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructFailedInvalidArgumentException()
    {
        $this->setExpectedException('InvalidArgumentException', '$shinglesCount must be int type');
        new \Shingles\MD5('lol');
    }

    public function testConstructSuccess()
    {
        $shingler = new \Shingles\MD5(3);
        $this->assertInstanceOf('\Shingles\Shingles', $shingler);
    }
}
