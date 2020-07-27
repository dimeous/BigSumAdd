<?php

namespace Tests\Unit;

use Tests\TestCase;
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

    //проверка на сумму простых чисел
    public function testBasicTest()
    {
        $res=$this->controller->calculate_result(['num1'=>111, 'num2'=>222]);
        $this->assertTrue($res===333);
    }

    //проверка на сумму при пустой строке
    public function testEmptyvaluesTest()
    {
        $res=$this->controller->calculate_result(['num1'=>'','num2'=>'']);
        $this->assertTrue($res=== 0);
    }

    //проверка на сумму для больших чисел
    public function testBigSumTest()
    {
        $res=$this->controller->calculate_result(
            ['num1'=>'11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111',
              'num2'=>'11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111']
        );
        $this->assertTrue($res==
            '22222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222'
        );
    }
}
