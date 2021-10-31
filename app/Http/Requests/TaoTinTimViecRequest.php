<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaoTinTimViecRequest extends FormRequest
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
            'user_id' => 'required',
            'ten' => 'required|string',
            'gioitinh' => 'required|string',
            'ngaysinh' => 'required|string',
            'email' => '',
            'anh' => '',
            'dienthoai' => 'required|string',
            'nganhnghe' => 'required|string',
            'kinhnghiem' => 'required|string',
            'thoigian' => 'required',
            'mucluong' => '',
            'mota' => ''
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng điền đầy đủ thông tin vào trường :attribute',
        ];
    }
}
