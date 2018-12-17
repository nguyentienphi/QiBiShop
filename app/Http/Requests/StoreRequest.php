<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'phone_number' => 'digits:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5024',
        ];
    }

    public function messages()
    {
        return [
            'phone_number.digits' => 'Ký tự số và đội dài  10 ký tự',
            'image.image' => 'Phải là một hình ảnh!',
            'image.mimes' => 'Định dạng không hợp lệ!'
        ];
    }
}
