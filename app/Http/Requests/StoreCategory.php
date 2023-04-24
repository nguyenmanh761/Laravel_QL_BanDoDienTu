<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name'=>'required|max:50',
            'feature'=>'required|numeric'
        ];
    }
    public function messages(){

        return[
            'name.required'=>'Tên danh mục thể thiếu',
            'name.max'=>'Tên danh mục không quá 50 ký tự',
            'feature.required'=>'Feature không được để trống',
            'feature.numeric'=>'Feature phải là số nguyên'
        ];
    }
}
