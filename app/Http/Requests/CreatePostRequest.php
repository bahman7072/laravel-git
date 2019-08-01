<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
//            'title' => ['required','max:60', new Uppercase()],
            'title' => ['required','max:60'],
            'description' => 'required',
            'file' => ['required', 'max:1000', 'mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان مورد نظر خود را انتخاب کنید',
            'title.max' => 'تعداد کارکترهای عنوان شما باید کمتر از 60 کارکتر باشد',
            'description.required' => 'لطفا توضیحات مطلب خود را وارد کنید',
            'file.required' => 'لطفا تصویر اصلی را مشخص کنید',
            'file.max' => 'حجم تصویر شما نباید بیش از 1 مگابایت باشد',
            'file.mimes' => 'نوع تصویر مطلب شما باید jpeg یا png یا jpg باشد'
        ];
    }
}
