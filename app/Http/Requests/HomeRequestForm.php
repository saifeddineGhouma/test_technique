<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequestForm extends FormRequest
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
            'name_c' => ['required'],
            'address_c' => 'required',
            'zip_code_c' => 'required',
            'city_c' => 'required',
            'account' => 'required',
            'country_c' => 'required',
            /**** debtor** */
            'name_d' => 'required',
            'address_d' => 'required',
            'zip_code_d' => 'required',
            'city_d' => 'required',
            'country_d' => 'required',
            /****products */
            'position'=>'required',
            'count'=>'required',
            'label'=>'required',
            'total'=>'required',
        ];
    }
}
