<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\SumController;

class CalculateTestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    private $controller ;
    public function setUp():    void {

        parent::setUp();

        $this->controller= new SumController();
    }

    public function testBasicTest()
    {

        $res=$this->controller->calculate_result(['num1'=>111, 'num2'=>222]);
        if ($res===333)
            $this->assertTrue(true);
        return;
    }
/*
    public function testSimpleAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 3]
        ];
    }
*/
}
