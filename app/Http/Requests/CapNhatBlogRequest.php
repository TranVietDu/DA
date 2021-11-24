<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatBlogRequest extends FormRequest
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
            'tennguoiviet' => 'required|string',
            'tieude' => 'required|string',
            'noidung' => 'required|string',
            'anh' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    public function attributes()
    {
        return [
            'tennguoiviet' => 'Tên người viết',
            'tieude' => 'Tiêu đề',
            'noidung' => 'Nội dung',
            'anh' => 'Ảnh',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng điền đầy đủ thông tin vào trường :attribute',
            'anh.image' => 'File được chọn không phải là ảnh',
            'anh.mimes'=> 'Định dạng ảnh phải là: jpeg, png, jpg, gif, svg'
        ];
    }
}
