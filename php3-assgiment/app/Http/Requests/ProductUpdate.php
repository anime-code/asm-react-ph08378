<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdate extends FormRequest
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
            'name' => 'required|min:4|max:100|' . Rule::unique('products')->ignore($this->id),
            'image' => 'max:500000|mimes:jpeg,png,jpg',
            'cate_id' => 'required',
            'short_desc' => 'required',
            'price' => 'required|min:0',
            'star' => 'required|digits_between:1,5',
            'detail' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống!',
            'name.min' => 'Tên sản phẩm tối thiểu 4 ký tự!',
            'name.max' => 'Tên sản phẩm tối thiểu 100 ký tự!',
            'image.max' => 'Size ảnh không lớn hơn 50MB',
            'image.mimes' => 'Chỉ nhận đuôi jpeg,png,jpg',
            'short_desc.required' => 'Mô tả ngắn không được để trống',
            'cate_id.required' => 'Danh mục không được để trống!',
            'price.required' => 'Giá sản phẩm không được để trống!',
            'price.min' => 'Giá sản phẩm phải lớn hơn 0!',
            'star.required' => 'Số sao không được để trống!',
            'star.digits_between' => 'Số sao trong khoảng từ 0->5',
            'detail.required' => 'Mô tả sản phẩm không được để trống!',
        ];
    }
}
