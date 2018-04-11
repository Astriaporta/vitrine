<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class LoginValidationRules extends FormRequest
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
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:6',
          'captcha' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'L\':attribute est obligatoire',
            'password.required'  => 'Un :attribute est requis',
            'captcha.captcha' => 'Invalid captcha code.',
        ];
    }
}
