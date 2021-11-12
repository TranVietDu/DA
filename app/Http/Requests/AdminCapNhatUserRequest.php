<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCapNhatUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|required_with:repassword|same:repassword',
            'repassword' => 'required',
            'role'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền vào trường Tên',
            'email.unique'=> 'Email đã tồn tại',
            'role.required' => 'Vui lòng điền vào trường Phân quyền',
            'password.same'=>"Nhập lại mật khẩu không trùng khớp",
            'password.min'=>"Mật khẩu tối thiểu 8 kí tự",
        ];
    }
}
