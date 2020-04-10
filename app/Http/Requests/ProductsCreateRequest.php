<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsCreateRequest extends FormRequest
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
            //
            /*'photo_id'      =>'required',
            'title'         =>'required',
            'body'          =>'required',
            'sasi_gjendje'  =>'required',
            'sasi_kile'     =>'required'*/
        ];
    }
}
