<?php
namespace LoSo\Test;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        require __DIR__ . '/../HelloWorld.php';
        $hello = new \LoSo\HelloWorld();
        $this->assertEquals('Hello Dude!', $hello->greet('Dude'));
    }
}

