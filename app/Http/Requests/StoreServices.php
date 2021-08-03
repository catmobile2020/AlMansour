<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServices extends FormRequest
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
            'category_id'   => 'required|string|min:1',
            'ar_title'      => 'required|string|min:2',
            'en_title'      => 'required|string|min:2',
            'ar_content'    => 'required|string|min:2',
            'en_content'    => 'required|string|min:2',
            'thumbnail'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video'         => 'nullable|url'
        ];
    }
}
