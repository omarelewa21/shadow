<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name'      => 'required|min:2|max:255',
            'company_address'   => 'required|min:2|max:500',
            'company_phone'     => 'required|min:2|max:255|regex:/(01)[0-9]{9}/',
            'company_email'     => 'required|min:2|max:255|email',
            'company_logo'      => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'company_facebook'  => 'min:2|max:255|nullable',
            'company_twitter'   => 'min:2|max:255|nullable',
            'company_linkedin'  => 'min:2|max:255|nullable',
            'company_instagram' => 'min:2|max:255|nullable',
            'company_youtube'   => 'min:2|max:255|nullable',
            'company_pinterest' => 'min:2|max:255|nullable',
            'company_github'    => 'min:2|max:255|nullable',
            'company_map_iframe'=> 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
