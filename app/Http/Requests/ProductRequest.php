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
            'price' => 'integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5024',
            'name' => 'unique:products'
        ];
    }

    public function messages()
    {
        return [
            'price.integer' => 'Ký tự không hợp lệ!',
            'image.image' => 'Phải là một hình ảnh!',
            'image.mimes' => 'Định dạng không hợp lệ!',
            'name.unique' => 'Tên sản phẩm đã tồn tại'
        ];
    }
}
