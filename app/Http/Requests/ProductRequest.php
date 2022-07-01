<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'length' => 'required',
                'diameter' => 'required',
                'thickness' => 'required',
                'class' => 'required',
                'mark' => 'required',
                'price' => 'required',
                'stock' => 'required'
            ], [
                'required' => 'Заполните поле'
            ])
        ];
    }
}
