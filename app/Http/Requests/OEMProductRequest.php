<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OEMProductRequest extends FormRequest
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
            'type' => 'required|string',
            'brand_name' => 'required|string',
            'part_number' => 'required',
            'part_name' => 'required|string|max:150',
            'lead_time' => 'required|integer',
            'length' => 'nullable',
            'width' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'min_order_quantity' => 'required|integer',
            'max_order_quantity' => 'nullable|integer',
            'country_id' => 'required',
            'unit_price' => 'required',
            'is_new' => 'required_without:is_used',
            'in_stock' => 'nullable|integer',
            'input_price' => 'nullable|array'
        ];
    }

    /**
     * Configure the error messages
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'part_name.required' => 'Part Name is required',
            'country_id.required' => 'Country is required'
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */        
    public function withValidator($validator)
    {
        $validator->after(function($validator) {
            if($this->input_price && $count = count($this->input_price)) {
                for($i=0; $i<$count; $i++) {
                    if($this->input_price[$i] == null) {
                        $validator->errors()->add('input_price', 'Slab price is missing');
                    }
                }
            }
        });
    }
}
