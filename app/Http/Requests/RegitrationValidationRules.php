<?php

namespace App\Http\Requests;

use App\Modules;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class RegitrationValidationRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      $ModuleRegister = Modules::information('register');

      if ($ModuleRegister->activated) {
        return Auth::guest();
      }

      return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'captcha' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'L\':attribute est obligatoire',
            'password.required'  => 'Un :attribute est requis',
            'password.confirmed'  => 'Vous devez confirmer le :attribute',
            'captcha.captcha' => 'Invalid captcha code.',
        ];
    }
}
