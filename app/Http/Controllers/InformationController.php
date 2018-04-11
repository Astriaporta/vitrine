<?php

namespace App\Http\Controllers;

use App\Informations;
use App\Http\Requests\InformationsValidationRules;
use Illuminate\Http\Request;

class InformationController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(InformationsValidationRules $request, $id)
  {
    $module = Informations::find($id);
    $module->name = $request['name'];
    $module->address = $request['address'];
    $module->postalcode = $request['postalcode'];
    $module->city = $request['city'];
    $module->country = $request['country'];
    $module->phone = $request['phone'];
    $module->email = $request['email'];
    $module->save();
  }
}
