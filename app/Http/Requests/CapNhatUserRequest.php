<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatUserRequest extends FormRequest
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
            'name' => '',
            'email' => 'email|unique:users',
        ];
    }
    public function messages()
    {
        return [
            'email.unique'=> 'Email đã tồn tại',
        ];
    }
    public function messages()
    {
        return [
        'name.required' => "Vui lòng nhập vào trường Tên",
        'email.required' => "Vui lòng nhập vào trường Email",
        'email.unique' => "Email đã tồn tại",
        'email.email'=> "Email không đúng định dạng",
        'role'=> "Role không thể để trống"
        ];

    }
}