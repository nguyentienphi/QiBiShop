<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OderRequest extends FormRequest
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
            'soluong' => 'integer|between:1,10'
        ];
    }

    public function messages()
    {
        return [
            'soluong.between' => 'Số lượng phải từ 1 tới 10',
            'integer' => 'Sai định dạng'
        ];
    }
}
