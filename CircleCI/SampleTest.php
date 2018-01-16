<?php
require_once('./Sample.php');
class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloworld()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }

}
