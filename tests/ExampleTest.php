<?php
namespace Mzert\Tests;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function testTwoStringsAreSimilar() {
        $str1 = "Exampler";
        $str2 = "Exampler";

        $this->assertSame($str1, $str2);
    }

    public function testNumberIsEqualsTen()
    {
        $sum = 10;
        $num = 5 + 5;

        $this->assertEquals($sum, $num);
    }

    
}