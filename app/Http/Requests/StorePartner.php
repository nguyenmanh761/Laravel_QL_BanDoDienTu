<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartner extends FormRequest
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
            'name'  => 'required|max:100',
            'phone'  => 'required|max:30',
            'email'  => 'required|max:200',
        ];
    }

    public function messages(){

        return[
            'name.required'=>'Tên không thể thiếu',
            'name.max'=>'Tên không quá  100 ký tự',
            'phone.required' => 'Số điện thoại không thể thiếu',
            //'phone.numeric' => 'Số điện thoại phải là kiểu nguyên',
            'phone.max' => 'Số điện thoại không quá 30 ký tự',
            'email.required' =>'Email không để trống ',
            'email.max' =>'Email không quá 200 ký tự',
        ];
    }

}
