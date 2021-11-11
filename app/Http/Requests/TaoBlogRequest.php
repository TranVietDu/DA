<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaoBlogRequest extends FormRequest
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
            'tennguoiviet' => 'required|string',
            'tieude' => 'required|string',
            'noidung' => 'required|string',
            'anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
        ];
    }
}
