<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            'fullname'=>'required|max:50',
            'address'=>'required|max:200',
            'phone'=>'required|max:200',
        ];
    }
    public function messages(){

        return[
            'fullname.required'=>'Tên không thể thiếu',
            'fullname.max'=>'Tên không quá 50 ký tự',
            'address.required'=>'Địa chỉ không được để trống',
            'address.max'=>'Địa chỉ không quá 200 ký tự',
            'phone.required'=>'Số điện thoại',
            'phone.max'=>'Số điện thoại không quá 200 ký tự'
        ];
    }
}
