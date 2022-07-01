<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            $this->validate([
                'name' => 'required',
                'surname' => 'required',
                'patronymic' => 'required',
                'email' => 'required|unique:users|email',
                'phone' => 'required',
                'birthday' => 'required|before:today',
                'city' => 'required',
                'company' => 'required',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required',
                'accept' => 'required'
            ], [
                'required' => 'Заполните данное поле',
                'min' => 'В поле должно быть минимум :min символов',
                'max' => 'В поле должно быть максимум :max символов',
                'before' => 'Вы не можете быть рождены после сегодня',
                'unique' => 'Данный логин или почта заняты',
                'confirmed' => 'Пароли не совпадают'
            ])
        ];
    }
}
