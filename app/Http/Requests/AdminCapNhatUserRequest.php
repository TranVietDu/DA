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
            'email' => 'required|email',
            'role'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền vào trường Tên',
            'role.required' => 'Vui lòng điền vào trường Phân quyền',
            'email.required' => 'Vui lòng điền vào trường Email'
        ];
    }
}
