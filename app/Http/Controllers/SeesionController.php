<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginValidationRules;
use App\Modules;

class SeesionController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest')->except('destroy');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $moduleLogin = Modules::information('login');
    $moduleRegister = Modules::information('register');

    return view('sessions.create')->with([
      'tittle' => $moduleLogin->name,
      'registerActivated' => $moduleRegister->activated
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(LoginValidationRules $request)
  {
      if ( !auth()->attempt([
        'email' => $request['email'],
        'password' => $request['password']
      ])) {
        return view('sessions.create')->withErrors([
          'failed' => 'Ces informations d\'identification ne correspondent pas à nos enregistrements.'
        ]);
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
    auth()->logout();

    return redirect()->home();
  }
}
