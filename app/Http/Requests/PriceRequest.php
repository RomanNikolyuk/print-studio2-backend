<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Rules\IfNotNullableInteger;
use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'model' => ['required', 'min:1', 'max:255'],
            /*'refill' => new IfNotNullableInteger(),
            'eternal_cartridge' => new IfNotNullableInteger(),
            'repairing' => new IfNotNullableInteger(),*/
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
