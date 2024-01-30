<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioProjectWithPageRequest extends FormRequest
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
            'home_banner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'home_title' => 'required|string|max:75',
            'background_banner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'main_banner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'contact_banner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'client_name' => 'required',
            'category' => 'required',
            'project_date' => 'required',
            'project_overview' => 'required',
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
