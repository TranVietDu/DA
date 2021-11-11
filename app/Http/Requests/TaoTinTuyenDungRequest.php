<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaoTinTuyenDungRequest extends FormRequest
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
            'tieude' => 'required|string',
            'tenquan' => 'required|string',
            'diachi' => 'required|string',
            'soluong' => 'required|string',
            'nganhnghe' => 'required|string',
            'luong' => '',
            'thoigian' => 'required|string',
            'mota' => 'required|string',
            'anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ngayhethan'=> 'required'
        ];
    }
    public function attributes()
    {
        return [
            'tieude' => 'Tiêu đề',
            'tenquan' => 'Tên quán',
            'diachi' => 'Địa chỉ',
            'soluong' => 'Số lượng',
            'nganhnghe' => 'Ngành nghề',
            'luong' => 'Mức lương',
            'thoigian' => 'Thời gian',
            'mota' => 'Mô tả',
            'anh' => 'Ảnh',
            'ngayhethan' => 'Ngày hết hạn',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng điền đầy đủ thông tin vào trường :attribute',
        ];
    }
}
