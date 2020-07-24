<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;
use Illuminate\Support\Facades\Cache;

class SumController extends Controller
{
    // функция контроллера  проверки
    public function store(FieldRequest $request)
    {
        $validatedData = $request->validated();
        // если проверка прошла расчитываем результ
        $res = \App\Http\Controllers\SumController::calculate_result($validatedData);

        // вывод результатат
        return view('calculate')->with('result',$res);
    }

    // функция расчета
    public function calculate_result($data)
    {
        // максимальное значение для int
        $max_int=PHP_INT_MAX;
        // опеределяем, сможем ли выполнить простым сложением
        if (($max_int-$data['num1']-$data['num2']) > 0){
            // отображение экрана с результатом суммы
            return ($data['num1']+$data['num2']);
        }
        else{   // сложное сложение
            //поместим данные в кеш
            Cache::forever('data', $data);
            //прочитаем данные из кеша
            $data_from_cash = Cache::get('data');
            return bcadd($data_from_cash['num1'],$data_from_cash['num2']);
        }
    }


}
