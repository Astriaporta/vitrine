<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ContactValidationRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'email' => 'required|email|max:255',
          'subject' => 'required|string|max:255',
          'message' => 'string|max:1000',
          'captcha' => 'required|captcha'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'L\':attribute est obligatoire',
            'message.required'  => 'Un :attribute est requis',
            'captcha.captcha' => 'Invalid captcha code.',
        ];
    }
}
