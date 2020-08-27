<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryStore extends FormRequest
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
            'image' => 'required|mimes:jpg,jpeg,png|max:500000'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Vui lòng chọn ảnh!',
            'image.mimes' => 'Ảnh chỉ nhận đuôi jpeg,png,jpg',
            'image.max' => 'Ảnh không vượt quá 50MB'
        ];
    }
}
