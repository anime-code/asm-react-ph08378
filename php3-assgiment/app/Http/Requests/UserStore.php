<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:80',
            'image' => 'required|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên người dùng không được để trống',
            'name.min' => 'Tên người dùng tối thiểu 3 ký tự',
            'name.max' => 'Tên người dùng tối đa 20 ký tự',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email này đã tồn tại',
            'email.required' => 'Email không được bỏ trống',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 80 ký tự',
            'image.required' => 'Ảnh đại diện không được bỏ trống',
            'image.mimes' => 'Chỉ nhận đuôi jpeg,png,jpg',
        ];
    }
}
