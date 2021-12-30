<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInfo extends FormRequest
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
            'site_name' => 'required|string|min:2',
            'address' => 'required|string|min:2',
            'mobile' => 'required|string|min:2',
            'fax' => 'required|string|min:2',
            'facebook' => 'nullable|string|min:2',
            'twitter' => 'nullable|string|min:2',
            'instgram' => 'nullable|string|min:2',
            'linkedin' => 'nullable|string|min:2',
            'map' => 'required|url|min:2',
            'email' => 'required|email|min:2',
            'logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
