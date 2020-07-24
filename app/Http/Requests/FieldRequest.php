<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // авторизация не требуется
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // правила проверки полей, поле может быть пустое или цифры до 255
        return [
            'num1' => 'nullable|regex:/^[0-9]{0,255}+$/um',
             'num2' => 'nullable|regex:/^[0-9]{0,255}+$/um'
            ];
    }

    public function messages()
    {
        // вывод ошибок, в случае не верных данных в поле
        return [
            'num1.regex' => 'Поле Число 1 должно быть цифровое до 255 символов',
            'num2.regex'  => 'Поле Число 2 должно быть цифровое до 255 символов'
        ];
    }
}
