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
            'username' => 'unique:users',
            'nic_number' => 'bail|digits:9|unique:profiles',
            'phone_number' => 'digits:10',
            'password' => 'bail|min:6|confirmed',
            'password_confirmation' => 'min:6'
        ];
    }

    public function messages()
    {
        return [
            'unique' => ':attribute đã tồn tại!',
            'nic_number.digits' => ':attribute chỉ chứa 9 ký tự số!',
            'phone_number.digits' => ':attribute chỉ chứa 10 ký tự số!',
            'password.confirmed' => 'Mật khẩu xác nhận chưa đúng',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
        ];
    }
}
