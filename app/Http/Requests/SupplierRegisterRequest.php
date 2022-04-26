<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:8|max:50',
            'company_name' => 'required|string|max:50',
            'business_id' => 'nullable|max:50',
            'name' => 'required|string|max:50',
            'url' => 'nullable|string|min:10',
            'phone' => 'required|max:50',
            'address_line_1' => 'required|max:150',
            'address_line_2' => 'required|max:150',
            'address_line_3' => 'nullable|max:150',
            'landmark' => 'nullable|string|max:50',
            'zip' => 'required|max:50',
            'city' => 'required|string|max:50',
            'country_id' => 'required|integer',
        ];
    }
}
