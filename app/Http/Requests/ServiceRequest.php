<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_title'         => 'required|max:30',
            'service_description'   => 'required|string',
            'why_choose_description'=> 'required|string',
            'service_main_banner'   => 'image|mimes:png,jpg,jpeg|max:2048',
            'service_second_banner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'service_third_banner'  => 'image|mimes:png,jpg,jpeg|max:2048',
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
