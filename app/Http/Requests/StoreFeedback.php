<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedback extends FormRequest
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
            'fullname'  => 'required|max:30',
            'title'  => 'required|max:200',
        ];
    }

    public function messages(){

        return[
            'fullname.required'=>'Tên không thể thiếu',
            'fullname.max'=>'Tên không quá  100 ký tự',
            'title.required' =>'Tiêu đề không để trống ',
            'title.max' =>'Tiêu đề quá 200 ký tự',
        ];
    }
}
