<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class InformationsValidationRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'string|max:255',
          'address' => 'string|max:255',
          'postalcode' => 'string|max:255',
          'city' => 'string|max:255',
          'country' => 'string|max:255',
          'phone' => 'string|max:255',
          'email' => 'email|max:255',
        ];
    }
}
