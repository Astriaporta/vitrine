<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegitrationValidationRules;
use App\User;
use App\Modules;

class RegistrationController extends Controller
{
  public $ModuleRegister;

  public function __construct()
  {
    $this->ModuleRegister = Modules::information('register');

    $this->middleware('guest')->except('destroy');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    if ($this->ModuleRegister->activated) {
      return view('registration.create')->with(['tittle' => 'Registration']);
    }
    return redirect()->home();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(RegitrationValidationRules $request)
  {
    if ($this->ModuleRegister->activated) {
      $user = User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => bcrypt($request['password']),
      ]);

      Auth()->login($user);
    }
    return redirect()->home();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
      //
  }
}
