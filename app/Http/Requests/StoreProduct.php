<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name'=>'required|max:100',
            'price'=>'required|numeric',
            'old_price'=>'required|numeric'
        ];
    }

    public function messages(){

        return[
            'name.required'=>'Tên sản phẩm không thể thiếu',
            'name.max'=>'Tên sản phẩm không quá 100 ký tự',
            'price.required'=>'Giá sản phẩm không được để trống',
            'price.numeric'=>'Giá của sản phẩm phải là số nguyên',
            'old_price.required'=>'Giá cũ sản phẩm không được để trống',
            'old_price.numeric'=>'Giá  cũ của sản phẩm phải là số nguyên'
        ];
    }
}
